<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cart;
use Session;
use Redirect;

class CartController extends Controller
{
    public function add_item_to_cart(request $request){
        $quantity=$request->quantity;
        $product_id=$request->product_id;
        $product=DB::table('products')
                    ->where('product_id', $product_id)
                    ->first();

                  
        $cartdata['qty']=$quantity;
        $cartdata['id']=$product->product_id;
        $cartdata['name']=$product->product_name;
        $cartdata['price']=$product->product_price;
        $cartdata['options']['image']=$product->product_image;

        Cart::add($cartdata);
        return Redirect::to('/show-cart');

    }

    public function show_cart(){

        $category=DB::table('category')
                    ->where('category_isactive',1)
                    ->get();

                    $manage_category=view('pages.cart')
                    ->with('category', $category);
            
                return view('layout')
                        ->with('pages.cart',$manage_category);
    }


    public function remove_from_cart($rowId){

        Cart::remove($rowId);
        return Redirect::to('/show-cart');


    }

    public function update_cart(request $request){


            for ($i = 0; $i < count($request->input('rowid')); $i++){

                Cart::update($request->rowid[$i], $request->quantity[$i]);

            }
        
        return Redirect::to('/show-cart');
      


    }

}
