<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Redirect;
Session_start();


class HomeController extends Controller
{
    public function index()
    {
        //return view('pages.home_content');

        
        $view_product_active=DB::table('products')
        ->join('category','products.category_id','=','category.category_id')
        ->where('product_isactive',1)
        ->get();
        $manage_products_active=view('pages.home_content')
        ->with('view_product_active', $view_product_active);

    return view('layout')
            ->with('pages.home_content',$manage_products_active);
  
    }

    public function category_page($category_id) {

          
        $category=DB::table('products')
        ->join('category','products.category_id','=','category.category_id')
        ->where('category.category_id',$category_id)
        ->where('products.product_isactive',1)
        ->get();
        $manage_products_category=view('pages.category')
        ->with('category', $category);

    return view('layout')
            ->with('pages.category',$manage_products_category);

    }


    public function product_page($product_id) {

        //return view('pages.product');

        $products_view_page=DB::table('products')
        ->join('category','products.category_id','=','category.category_id')
        ->where('products.product_id',$product_id)
        ->where('products.product_isactive',1)
        ->first();
        $manage_products_page=view('pages.product')
        ->with('products_view_page', $products_view_page);

    return view('layout')
            ->with('pages.product',$manage_products_page);




    }

    public function product_search(request $request){

        $search=$request->search;

        

        $view_product=DB::table('products')
            ->where('products.product_name', 'LIKE', '%' . $search . '%')
            ->get();

            $manage_products_page=view('pages.product_search')
            ->with('view_product', $view_product);
    
        return view('layout')
                ->with('pages.product_search',$manage_products_page);

           


    }

    public function my_account(){

        $customer_id=Session::get('cus_id');
        //j
        if($customer_id){

        $view_order_by_id=DB::table('customer')
        ->join('order','customer.cus_id','=','order.cus_id')
        ->join('order_details','order.order_id','=','order_details.order_id')
        ->join('shipping','order.shipping_id','=','shipping.shipping_id')
        ->join('payment','order.order_id','=','payment.payment_id')
        ->select('order.*','customer.*','order_details.*','shipping.*','payment.*')
        ->where('customer.cus_id',$customer_id) 
        
        ->get();

       // echo "<pre>";
       // print_r($view_order_by_id);
       // echo "</pre>";
       
       $manage_orders=view('pages.my_account')
        ->with('view_order_by_id', $view_order_by_id);

    return view('layout')
            ->with('pages.my_account',$manage_orders);
        }
        else {
            return Redirect::to('/');
        }


    }

    
}
