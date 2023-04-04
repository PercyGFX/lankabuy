<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Redirect;
Session_start();

class ActionController extends Controller
{
   public function logout(){

        //Session::put('admin_name',null);
        //Session::put('admin_id',null);
        //Session::put('admin_email',null);
        Session::flush();
        return Redirect::to('/admin');
   }
}
