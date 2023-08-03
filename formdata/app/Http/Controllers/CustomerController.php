<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Student;
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
 
}
