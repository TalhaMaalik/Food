<?php

namespace App\Http\Controllers;
use App\admin;
use App\itemmodel;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class adminController extends Controller
{


    function LoginView(){

        $error=[];

        if(isset($_GET['nologin'])){

            $error=['error' => 'You must login first!'];

        }

        return view('AdminViews.page-login',$error);

    }

    function IndexView(){


        return view('AdminViews.index');
    }


    function login(){

        $admin_id = Input::get('id');
        $password = Input::get('password');




        try {

            $search = admin::where('id', '=', $admin_id)->firstOrFail();


            if (password_verify($password,$search->pass)) {

                setcookie('token',$search->token,time()*20*20,'/');
               return redirect('/');


            } else {
                $error = ['error' => 'Invalid ID or Password'];

                return view('AdminViews.page-login',$error);
            }

        }  catch (\Exception $e){

            $error= ['error' => 'Invalid ID or Password'];
           return view('AdminViews.page-login',$error);

        }
    }

}
