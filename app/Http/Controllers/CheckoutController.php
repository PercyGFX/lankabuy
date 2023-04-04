<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Redirect;
use Cart;
Session_start();

class CheckoutController extends Controller
{
   public function login_check(){

        return view('pages.login_register');
   }

   public function customer_register(request $request){

    $data=array();
    $data['cus_name']=$request->cus_fullname;
    $data['cus_email']=$request->cus_email;
    $data['cus_password']=md5($request->cus_password);
    $data['cus_mobile']=$request->cus_phone;

    $cus_id=DB::table('customer')
        ->insertGetid($data);

        Session::put('cus_id',$cus_id);
        Session::put('cus_name',$request->cus_fullname);
        Session::put('cus_email',$request->cus_email);
        return Redirect('/checkout');
        

   }

   public function checkout(){

    return view('pages.checkout');
   }

   public function add_shipping(request $request){

    $data= array();
    $data['shipping_email']=$request->shipping_email;
    $data['shipping_fname']=$request->shipping_fname;
    $data['shipping_lname']=$request->shipping_lname;
    $data['shipping_address']=$request->shipping_address;
    $data['shipping_city']=$request->shipping_city;
    $data['shipping_zipcode']=$request->shipping_zipcode;
    $data['shipping_phone']=$request->shipping_phone;

   $shipping_id=DB::table('shipping')
        ->insertGetId($data);
        Session::put('shipping_id',$shipping_id);
        return Redirect::to('/payment');

   }

   public function customer_login(request $request){

    $customer_email=$request->cus_email;
    $customer_password=md5($request->cus_password);
    $check=DB::table('customer')
            ->where('cus_email',$customer_email)
            ->where('cus_password',$customer_password)
            ->first();

            if($check){
                Session::put('cus_id',$check->cus_id);
                return Redirect::to('/checkout');
            }
            else {
                return Redirect::to('/login-check');
            }
   }

   public function user_logout(){

    Session::flush();
    Return redirect::to('/');
   }

   public function payment(){

    $category=DB::table('category')
    ->where('category_isactive',1)
    ->get();

    $manage_category=view('pages.payment')
    ->with('category', $category);

     return view('layout')
        ->with('pages.payment',$manage_category);


   }

   public function order_payment(request $request){

    $payment_method = $request->payment_method;

    $shipping_id=Session::get('shipping_id');
    $customer_id=Session::get('cus_id');

    $payment=array();
    $payment['payment_method']=$payment_method;
    $payment['payment_status']="Pending";

       $payment_id=DB::table('payment')
               ->insertGetId($payment);

    $order=array();
    $order['cus_id']=$customer_id;
    $order['shipping_id']=$shipping_id;
    $order['payment_id']=$payment_id;
    $order['total']=Cart::total();
    $order['order_status']="Pending";
    $order_id=DB::table('order')
            ->insertGetId($order);


    $items=Cart::content();
    $order_details=array();

    foreach ($items as $items) {

    $order_details['order_id']= $order_id;
    $order_details['product_id']= $items->id;
    $order_details['product_name']= $items->name;
    $order_details['product_price']= $items->price;
    $order_details['quantity']= $items->qty;
    DB::table('order_details')
        ->insert($order_details);
    }

    $success=array();
    $success['order_id']=$order_id;
    $success['total']=Cart::total();




        if ($payment_method=="bank"){

           // return view('pages.bank')->with('success', $success);
           Cart::destroy();
            return view('pages.bank', compact('success'));
            
    
       }
        elseif($payment_method=="check"){
    
            Cart::destroy();
            return view('pages.ezcash', compact('success'));
    
       }
       elseif($payment_method=="cashondelivery"){
    
        Cart::destroy();
        return view('pages.cashondelivery', compact('success'));
      
         }else {
            echo "Go back and select payment method "; 
         }
    
   }

   // // // BackEND Manage Order Functions // // //

   public function manage_orders(){

    $view_order_show=DB::table('order')
        ->join('customer','order.cus_id','=','customer.cus_id')
        ->select('order.*','customer.cus_name')
        ->get();
        $manage_orders=view('admin.manage_orders')
        ->with('view_order_show', $view_order_show);

    return view('admin_frame')
            ->with('admin.manage_orders',$manage_orders);


   }

   public function view_orders($order_id){
   
    $view_order_by_id=DB::table('order')
        ->join('customer','order.cus_id','=','customer.cus_id')
        ->join('order_details','order.order_id','=','order_details.order_id')
        ->join('shipping','order.shipping_id','=','shipping.shipping_id')
        ->join('payment','order.order_id','=','payment.payment_id')
        ->select('order.*','customer.*','order_details.*','shipping.*','payment.*')
        ->where('order.order_id',$order_id) 
        
        ->get();
        $manage_orders=view('admin.view_orders')
        ->with('view_order_by_id', $view_order_by_id);

    return view('admin_frame')
            ->with('admin.view_orders',$manage_orders);

   }

   public function mark_paid($order_id){


    DB::table('order')
    ->join('payment','order.order_id','=','payment.payment_id')
    ->where('order.order_id', $order_id)
    ->update(['payment_status'=>1]);
    Session::put('message','Payment Status Chnaged');
    return Redirect::to('view-order/'.$order_id);
   }

   public function unmark_paid($order_id){


    DB::table('order')
    ->join('payment','order.order_id','=','payment.payment_id')
    ->where('order.order_id', $order_id)
    ->update(['payment_status'=>"Pending"]);
    Session::put('message','Payment Status Chnaged');
    return Redirect::to('view-order/'.$order_id);
   }

   
   

   public function mark_completed($order_id){


    DB::table('order')
    //->join('payment','order.order_id','=','payment.payment_id')
    ->where('order.order_id', $order_id)
    ->update(['order_status'=>"Completed"]);
    Session::put('message','Order Status Chnaged');
    return Redirect::to('view-order/'.$order_id);
   }

   public function unmark_completed($order_id){


    DB::table('order')
    //->join('payment','order.order_id','=','payment.payment_id')
    ->where('order.order_id', $order_id)
    ->update(['order_status'=>"Pending"]);
    Session::put('message','Order Status Chnaged');
    return Redirect::to('view-order/'.$order_id);
   }

}
