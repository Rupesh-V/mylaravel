<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Redirect;
use Session;

class CustomerController extends Controller
{
    //
    // public function addDetails(Request $req){
    //     $req->validate([
    //         'email'   => 'required|unique:otm_data']);
    //     print_r($req->all());
    //     $data=$req->all();
    //     print_r($data['name']);
    //     $customer = new Customer;
    //     $result=$customer->addDetails($data);
    //     return redirect()->back()->with('success','Inserted data sucessfully');    
         
   
    //    }
    public function addDetails(Request $req){
        
        $user=DB::table('otm_data')->where('email','=',$req->email)->first();
        
       if(!$user){
        print_r($req->all());
        $data=$req->all();
        print_r($data['name']);
        $customer = new Customer;
        $result=$customer->addDetails($data);
        return redirect()->back()->with('success','Inserted data sucessfully');
       }
       else{
        return redirect()->back()->with('failure','Email already exists');
       }
       }
    public function conDetails(Request $req){
        print_r($req->all());

        $contacts=$req->all();
        print_r($contacts['email']);

        $contact=new Customer;
        $result=$contact->conDetails($contacts);
        $req->session()->flash('alert-success', 'Invalid Captcha');
        return redirect('/');


}
public function list(){
    $customer = new Customer;
    $result=$customer->list();
    
    return view('enquries',compact('result'));

    
 }
 public function addData(Request $req){
        
    
   
    print_r($req->all());
    $data=$req->all();
    
    $customer = new Customer;
    $result=$customer->addData($data);
    return redirect('/admin')->with('success','Inserted data sucessfully');
   
   }
//  
}
// public function addDetails(Request $req){
//     print_r($req->all());
//     $data=$req->all();
//     print_r($data['name']);
   
//     $req->validate([
//         'email'   => 'required|email|exists:otm_data,email']);
//         $user=DB::table('otm_data')->where('email','=',$req->email)->first();
    
//    if(!$user){
  
//     $customer = new Customer;
//     $result=$customer->addDetails($data);
//     return redirect()->back()->with('success','Inserted data sucessfully');
//    }
//    else{
//     return redirect()->back()->with('failure','Email already exists');
//    }
//    }