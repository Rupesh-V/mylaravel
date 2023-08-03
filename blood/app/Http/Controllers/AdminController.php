<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;

use App\Models\Blood;


class AdminController extends Controller
{
    public function list(){
        $customer = new Admin;
        $result=$customer->list();
        
        return view('update',compact('result'));
  
        
     }
    
     public function edit($id){
        
        $update=Blood::find($id);
        return view('edit',compact('update'));

     }
     public function updating(Request $request,$id){
        
        $update=Blood::find($id);
        $update->donor_name=$request->input('title');
        $update->blood_group=$request->input('content');
        $update->date_donotion=$request->input('fontawesome');
        $update->quantity=$request->input('color');
        $update->update();
        
        return redirect('/admin');

     }
    



   
    public function destroy($id)
    {
      $del =Blood::findorfail($id);
      $del->delete();
      return redirect('/admin');
    }
    public function addNew(Request $req){
        print_r($req->all());
        $data=$req->all();
        $customer = new Admin;
        $result=$customer->addNew($data);
      //   $result->save();




      
        return redirect('/admin');
        

}
public function login(Request $req){
   $customer = new Admin;
   $result=$customer->login();
   return $result::where('email',$req->input('emial'))->get();
        
}
public function user(){
   $customer = new Admin;
   $result=$customer->list();
   
   return view('userpanel',compact('result'));

   
}
}
