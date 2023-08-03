<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
// use Redirect;
// use Session;

class CustomrController extends Controller
{
    //
    public function addDetails(Request $req){
        print_r($req->all());
        
        $data=$req->all();
        print_r($data['name']);
        
        $customer = new Customer;
        $result=$customer->addDetails($data);
        $req->session()->flash('alert-success', 'Invalid Captcha');
        return redirect('/');
        



    }
}
