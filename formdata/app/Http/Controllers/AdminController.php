<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use App\Models\Card;


class AdminController extends Controller
{
    public function list(){
        $customer = new Admin;
        $result=$customer->list();
        
        return view('update',compact('result'));
  
        
     }
    
     public function edit($id){
        
        $update=Card::find($id);
        return view('edit',compact('update'));

     }
     public function updating(Request $request,$id){
        
        $update=Card::find($id);
        $update->title=$request->input('title');
        $update->content=$request->input('content');
        $update->fontawesome=$request->input('fontawesome');
        $update->color=$request->input('color');
        $update->update();
        
        return redirect('/admin');

     }
    //  public function updating(Request $req,$id){
    //     print_r($req->all());
        
    //     $data=$req->all();
        
        
    //     $customer = new Admin;
    //     $update=$customer->edit($data);

    //     return redirect('/admin')->with('success','update data sucessfully');
        



    // }
    public function destroy($id)
    {
      $del =Card::findorfail($id);
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
}
