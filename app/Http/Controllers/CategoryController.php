<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Redirect;
Session_start();

class CategoryController extends Controller
{
    public function index() {
        return view('admin.add_category');
   
   }

   public function manage_category() {

    $view_category_show=DB::table('category')
            ->get()
          ;
        $manage_category=view('admin.manage_category')
        ->with('view_category_show', $view_category_show);

    return view('admin_frame')
            ->with('admin.manage_category',$manage_category);

}

public function route_add_category(Request $request) {

    $category = array();
        $category['category_id'] = $request->category_id;
        $category['category_name'] = $request->category_name;
        $category['category_description'] = $request->category_description;
        $category['category_isactive'] = $request->category_isactive;

        DB::table('category')->insert($category);
        Session::put('message','Category Added!');
        return redirect('/add-category');
}

public function disable_category($category_id) {

    DB::table('category')
        ->where('category_id', $category_id)
        ->update(['category_isactive'=>0]);
        Session::put('message','Category Deactivated!');
        return Redirect::to('manage-category');

}

public function active_category($category_id) {

    DB::table('category')
        ->where('category_id', $category_id)
        ->update(['category_isactive'=>1]);
        Session::put('message','Category Activated!');
        return Redirect::to('manage-category');

}

public function edit_category($category_id) {

    $category_edit = DB::table('category')
        ->where('category_id', $category_id)
        ->first();

        $category_edit=view('admin.edit_category')
        ->with('category_edit', $category_edit);

    return view('admin_frame')
            ->with('admin.edit_category',$category_edit);
    //return view('admin.edit_category');
}


public function update_category(Request $request,$category_id) {

    $update = array();
    $update['category_name'] = $request->category_name;
    $update['category_description'] = $request->category_description;

    DB::table('category')
    ->where('category_id',$category_id)
    ->update($update);
    Session::put('message','Category Updated!');
    return Redirect::to('manage-category');


}

public function delete_category($category_id) {

    DB::table('category')
        ->where('category_id', $category_id)
        ->delete();
        Session::put('message','Category Deleted!');
        return Redirect::to('manage-category');



}









}
