<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
    	$customers['customers'] = Customer::all();
        return view('customer',$customers);
    }
    public function store(Request $request){
        $customer = new customer;
        $customer->fname=$request->fname;
        $customer->lname=$request->lname;
        $customer->gender=$request->gender;
        $customer->email=$request->email;
        $customer->region=$request->region;
        $customer->countryname=$request->countryname;
        $customer->statename=$request->statename;
        $customer->cityname=$request->cityname;

        if($customer->save())
        {
            echo "Inserted Successfully";
        }
        else
        {
            echo "Insert failed";
        }
    }
    public function show($id){
    	$customer['customer']
= Customer::find($id);
return view('customer-edit',$customer);    }
public function update(Request $request){
	$customer = Customer::find($request->id);
	$customer->fname=$request->fname;
        $customer->lname=$request->lname;
        $customer->email=$request->email;
        $customer->region=$request->region;
        $customer->countryname=$request->countryname;
        $customer->statename=$request->statename;
        $customer->cityname=$request->cityname;
        

        if($customer->save())
        {
            echo "Updated Successfully";
        }
        else
        {
            echo "Update failed";
        }
    }
public function delete($id){
	$customer=Customer::find($id);

	if($customer->delete()){
		echo"Deleted";
	}
	else{
		echo "not";
	}
	}
}

