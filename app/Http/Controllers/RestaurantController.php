<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\itemmodel;
use App\menumodel;
use App\ownermodel;
use App\restaurantmodel;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class RestaurantController extends Controller
{

    function RegisterView(){

        return view('RestaurantViews.registration');

    }

    function Register(Request $request) {
        $owner_name = Input::get('owner_name');
        $email = Input::get('email');
        $owner_phone = Input::get('owner_phone');
        $restaurant_name = Input::get('restaurant_name');
        $address = Input::get('restaurantaddress');
        $rest_phone = Input::get('rest_phone');
        $lat = Input::get('lat');
        $long = Input::get('long');
        $d_charges = Input::get('d_charges');
        $d_time = Input::get('d_time');

        $errors=[];
        $validator = Validator::make($request->all(),[
            'owner_name' => 'required',
            'email' => 'required|email',
            'owner_phone' => 'required',
            'restaurant_name' => 'required',
            'restaurantaddress' => 'required',
            'rest_phone' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'd_charges' => 'required|numeric',
            'd_time' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            $errors=[];
            $error = ($validator->messages());

            foreach ($error->all() as $message) {
                $errors[] = ($message);
            }
        }

        if ($errors) {
            $add_ons['errors'] = $errors;

        } else {
            $owner_obj = new ownermodel();
            $rest_obj = new restaurantmodel();


            $owner_obj->id = mt_rand(1000, 9999);
            $owner_obj->name = $owner_name;
            $owner_obj->email = $email;
            $owner_obj->phone = $owner_phone;

            $rest_obj->id = mt_rand(1000,9999);
            $rest_obj->name = $restaurant_name;
            $rest_obj->address = $address;
            $rest_obj->phone = $rest_phone;
            $rest_obj->lat = $lat;
            $rest_obj->lon = $long;
            $rest_obj->deliverycharges = $d_charges;
            $rest_obj->deliverytime = $d_time;

            foreach(Input::get('item') as $i) {
                $menu_obj = new menumodel();
                $menu_obj->id = mt_rand(1000,9999);
                $menu_obj->name = $i['name'];
                $menu_obj->price = $i['price'];

            }

            foreach(Input::get('item') as $i) {
                $filename = time().'.'.request()->$i['image']->getClientOriginalExtension();
                request()->$i['image']->move(public_path('C:\Users\Minhaj Siddiqui\Downloads'), $filename);

                $user->image=$filename;
                $user->save();

            }

            $owner_obj->save();
            $rest_obj->save();
            $menu_obj->save();
            $add_ons['success'] = "Successfully Added";
        }

        return view('RestaurantViews.registration')->with('add_ons',$add_ons);
        //  return $add_ons;
    }
}
