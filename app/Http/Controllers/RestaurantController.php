<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\itemmodel;
use App\menumodel;
use App\ownermodel;
use App\restaurantmodel;
use Illuminate\Pagination\PaginationServiceProvider;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class RestaurantController extends Controller
{

    function RegisterView()
    {
        return view('RestaurantViews.registration');
    }

    function ModifyView()
    {
        $add_ons['restobj'] = restaurantmodel::orderby('id', 'asc')->paginate(5);
        return view('RestaurantViews.modify')->with('add_ons', $add_ons);
    }

    function EditView($rest_id)
    {
        $add_ons['restobj'] = restaurantmodel::where('id', '=', $rest_id)->first();
        $add_ons['ownerobj'] = ownermodel::where('id', '=', $add_ons['restobj']->ownerID)->first();
        $add_ons['menuobj'] = menumodel::where('restaurantID', '=', $rest_id)->get();
        return view('RestaurantViews.edit')->with('add_ons', $add_ons);
    }

    function search()
    {
        try {
            $rest_id = Input::get('search');
            $add_ons['restobj'] = restaurantmodel::where('id', '=', $rest_id)->orderby('id', 'asc')->paginate(5);
            return view('RestaurantViews.modify')->with('add_ons', $add_ons);

        } catch (\Exception $e) {
            $add_ons['error'] = 'No Records Found';
            return redirect('/modify')->with('add_ons', $add_ons);
        }
    }

    function Register(Request $request)
    {

        $owner_name = Input::get('owner_name');
        $email = Input::get('email');
        $owner_phone = Input::get('owner_phone');
        $restaurant_name = Input::get('restaurant_name');
        $address = Input::get('restaurantaddress');
        $rest_phone = Input::get('rest_phone');
        $lat = Input::get('lat');
        $long = Input::get('long');
        $d_charges = Input::get('deliverycharges');
        $d_time = Input::get('deliverytime');

        $errors = [];
        $validator = Validator::make($request->all(), [
            'owner_name' => 'required',
            'email' => 'required|email',
            'owner_phone' => 'required',
            'restaurant_name' => 'required',
            'restaurantaddress' => 'required',
            'rest_phone' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'deliverycharges' => 'required|numeric',
            'deliverytime' => 'required|numeric',

        ]);

        if ($validator->fails()) {
            $errors = [];
            $error = ($validator->messages());

            foreach ($error->all() as $message) {
                $errors[] = ($message);
            }
        }

        foreach (Input::get('item') as $item) {

            if (!isset($item['name'])) {

                $errors[] = ("Item names are empty");

            }
            if (!isset($item['price'])) {

                $errors[] = ("Item prices are empty");

            }
        }

        if ($errors) {
            $add_ons['errors'] = $errors;

        } else {
            $owner_obj = new ownermodel();
            $rest_obj = new restaurantmodel();


            $owner_obj->name = $owner_name;
            $owner_obj->email = $email;
            $owner_obj->phone = $owner_phone;
            $owner_obj->Save();

            $rest_obj->ownerID = $owner_obj->id;
            $rest_obj->name = $restaurant_name;
            $rest_obj->address = $address;
            $rest_obj->phone = $rest_phone;
            $rest_obj->lat = $lat;
            $rest_obj->lon = $long;
            $rest_obj->deliverycharges = $d_charges;
            $rest_obj->deliverytime = $d_time;

            $rest_obj->Save();


            foreach (Input::get('item') as $index => $i) {
                $menu_obj = new menumodel();
                $menu_obj->restaurantID = $rest_obj->id;
                $menu_obj->name = $i['name'];
                $menu_obj->price = $i['price'];

                $menu_obj->save();

                if (isset(Input::file('item')[$index]['image'])) {
                    $file = Input::file('item')[$index]['image'];
                    $filename = $menu_obj->id . '.' . $file->getClientOriginalExtension();
                    $file->move(public_path() . '/images/data/', $filename);

                }
            }


            $add_ons['success'] = "Successfully Added";
        }
        return view('RestaurantViews.registration')->with('add_ons', $add_ons);
    }


    function Edit(Request $request, $rest_id)
    {


        $owner_name = Input::get('owner_name');
        $email = Input::get('email');
        $owner_phone = Input::get('owner_phone');
        $restaurant_name = Input::get('restaurant_name');
        $address = Input::get('restaurantaddress');
        $rest_phone = Input::get('rest_phone');
        $lat = Input::get('lat');
        $long = Input::get('long');
        $d_charges = Input::get('deliverycharges');
        $d_time = Input::get('deliverytime');

        $errors = [];
        $validator = Validator::make($request->all(), [
            'owner_name' => 'required',
            'email' => 'required|email',
            'owner_phone' => 'required',
            'restaurant_name' => 'required',
            'restaurantaddress' => 'required',
            'rest_phone' => 'required',
            'lat' => 'required',
            'long' => 'required',
            'deliverycharges' => 'required|numeric',
            'deliverytime' => 'required|numeric',

        ]);

        if ($validator->fails()) {
            $errors = [];
            $error = ($validator->messages());

            foreach ($error->all() as $message) {
                $errors[] = ($message);
            }
        }


        $rest_obj = restaurantmodel::where('id', $rest_id)->first();
        $owner_obj = ownermodel::where('id', '=', $rest_obj->ownerID)->first();
        $add_ons['restobj'] = $rest_obj;
        $add_ons['ownerobj'] = $owner_obj;

        if ($errors) {
            $add_ons['errors'] = $errors;

        } else {

            $owner_obj->name = $owner_name;
            $owner_obj->email = $email;
            $owner_obj->phone = $owner_phone;
            $owner_obj->Save();
            $add_ons['ownerobj'] = $owner_obj;

            $rest_obj->ownerID = $owner_obj->id;
            $rest_obj->name = $restaurant_name;
            $rest_obj->address = $address;
            $rest_obj->phone = $rest_phone;
            $rest_obj->lat = $lat;
            $rest_obj->lon = $long;
            $rest_obj->deliverycharges = $d_charges;
            $rest_obj->deliverytime = $d_time;
            $rest_obj->Save();
            $add_ons['restobj'] = $rest_obj;


            foreach (Input::get('item') as $index => $i) {
                if ($i['name'] && $i['price']) {

                    $menu_obj = new menumodel();
                    $menu_obj->restaurantID = $rest_obj->id;
                    $menu_obj->name = $i['name'];
                    $menu_obj->price = $i['price'];
                    $menu_obj->save();


                    if (isset(Input::file('item')[$index]['image'])) {
                        $file = Input::file('item')[$index]['image'];
                        $filename = $menu_obj->id . '.' . $file->getClientOriginalExtension();
                        $file->move(public_path() . '/images/data/', $filename);

                    }
                }
            }

            $add_ons['menuobj'] = menumodel::where('restaurantID', '=', $rest_id)->get();
            $add_ons['message'] = "Successfully Updated";
        }

        return view('RestaurantViews.edit')->with('add_ons', $add_ons);
    }


    function delete($rest_id)
    {

        try {
            $add_ons['restobj'] = restaurantmodel::where('id', '=', $rest_id)->first();
            $add_ons['ownerobj'] = ownermodel::where('id', '=', $add_ons['restobj']->ownerID)->delete();
            $add_ons['menuobj'] = menumodel::where('restaurantID', '=', $rest_id)->delete();
            restaurantmodel::where('id', '=', $rest_id)->delete();
            $add_ons = ['message' => 'restaurant deleted successfully'];
            return redirect('/modify')->with('add_ons', $add_ons);
        } catch (\Exception $e) {
            $add_ons = ['error' => 'unable to delete the restaurant'];
            return redirect('/modify')->with('add_ons', $add_ons);
        }
    }

    function delete_menu($menu_id)
    {

        try {
            menumodel::where('id', '=', $menu_id)->delete();
            $add_ons = ['message' => 'menu deleted successfully'];
            return redirect('/modify')->with('add_ons', $add_ons);
        } catch (\Exception $e) {
            $add_ons = ['error' => 'unable to delete the restaurant'];
            return redirect('/modify')->with('add_ons', $add_ons);
        }
    }
}
