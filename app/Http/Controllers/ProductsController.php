<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Redirect;
Session_start();

class ProductsController extends Controller
{
    public function index(){

        return view('admin.add_products');
    }


    public function route_add_products(Request $request) {

        $products = array();
       $products['product_id'] = $request->product_id;
       $products['product_name'] = $request->product_name;
       $products['category_id'] = $request->product_categoryid;
       $products['product_short_description'] = $request->short_description;
       $products['product_long_description'] = $request->long_description;
       $products['product_price'] = $request->product_price;
       
       $products['product_weight'] = $request->product_weight;
       $products['product_brand'] = $request->product_brand;
       $products['product_isactive'] = $request->product_isactive;



        $image=$request->file('product_image');
        if ($image){
            $image_name=str_random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if($success) {
                $products['product_image'] = $image_url;

                DB::table('products')
                        ->insert($products);
                        Session::put('message','Product Added!');
                        return redirect('/add-products');

            }
        }
        $products['product_image']='image/noimage.png';
        DB::table('products')
        ->insert($products);
        Session::put('message','Product Added!');
        return redirect('/add-products');

        //echo "<pre>";
        //echo($products);
        //echo "</pre>";        
    }

    public function manage_products() {

        $view_product_show=DB::table('products')
        ->join('category','products.category_id','=','category.category_id')
        ->get();
        $manage_products=view('admin.manage_products')
        ->with('view_product_show', $view_product_show);

    return view('admin_frame')
            ->with('admin.manage_products',$manage_products);


    }

    
public function disable_product($product_id) {

    DB::table('products')
        ->where('product_id', $product_id)
        ->update(['product_isactive'=>0]);
        Session::put('message','Product Deactivated!');
        return Redirect::to('manage-products');

}

public function activate_product($product_id) {

    DB::table('products')
        ->where('product_id', $product_id)
        ->update(['product_isactive'=>1]);
        Session::put('message','Product Activated!');
        return Redirect::to('manage-products');

}

public function edit_products($product_id) {

    $product_edit = DB::table('products')
        ->where('product_id', $product_id)
        ->first();

        $product_edit=view('admin.edit_products')
        ->with('product_edit', $product_edit);

    return view('admin_frame')
            ->with('admin.edit_products',$product_edit);
    //return view('admin.edit_category');
}

public function update_products(Request $request,$product_id) {

    $pupdate = array();
    $pupdate['product_name'] = $request->product_name;
    $pupdate['product_short_description'] = $request->short_description;
    $pupdate['product_long_description'] = $request->long_description;
    $pupdate['product_price'] = $request->product_price;
    $pupdate['product_weight'] = $request->product_weight;
    $pupdate['product_brand'] = $request->product_brand;

    $image=$request->file('product_image');
    if ($image){
        $image_name=str_random(20);
        $ext=strtolower($image->getClientOriginalExtension());
        $image_full_name=$image_name.'.'.$ext;
        $upload_path='image/';
        $image_url=$upload_path.$image_full_name;
        $success=$image->move($upload_path,$image_full_name);
        if($success) {

            $pupdate['product_image'] = $image_url;

        

        } }

    DB::table('products')
    ->where('product_id',$product_id)
    ->update($pupdate);
    Session::put('message','Product Updated!');
    return Redirect::to('manage-products');


}


public function delete_product($product_id) {

    DB::table('products')
        ->where('product_id', $product_id)
        ->delete();
        Session::put('message','Product Deleted!');
        return Redirect::to('manage-products');



}

   


}


