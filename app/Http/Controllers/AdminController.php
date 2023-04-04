<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Redirect;
Session_start();


class AdminController extends Controller
{
    public function index()
    {
        return view('admin_login');
    }

    public function indexdashboard()
    {
        $this->gateway();
        return view('admin.dashboard');
    }

    public function adminauth(Request $request)
    {
        $admin_email=$request->admin_email;
        $admin_password=md5($request->admin_password);
        $result=DB::table('admin')
                ->where('admin_email', $admin_email)
                ->where('admin_password',$admin_password)
                ->first();
                
                if($result){
                    Session::put('admin_name',$result->admin_name);
                    Session::put('admin_id',$result->admin_id);
                    Session::put('admin_email',$result->admin_email);
                    return Redirect::to('/dashboard');
                } else {
                    Session::put('loginerror','Email Or Password Invalid');
                    return Redirect::to('/admin');


                }

    }

    public function gateway(){

        $Sessionadmin =Session::get('admin_id');

        $adminauthcheck =DB::table('admin')
        ->where('admin_id', $Sessionadmin)
        ->first();

        if ($Sessionadmin){
        $DBGET = $adminauthcheck->admin_email;
      


       $admincheck=Session::get('admin_email');
       if ($admincheck==$DBGET){
           return;

          } else{
           return redirect::to('/admin')->send();
        }

}
else{
    return redirect::to('/admin')->send();
 }

    }


    //order search from dashboard

    public function search_order(request $request){

       $search=$request->search;

       return Redirect::to('view-order/'.$search);
       
    }

    //manage users

    public function manage_users(){
        

        $view_users_show=DB::table('customer')
            ->get()
          ;
        $manage_users=view('admin.manage_users')
        ->with('view_users_show', $view_users_show);

    return view('admin_frame')
            ->with('admin.manage_users',$manage_users);
    }
}
