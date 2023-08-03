<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Redirect;
use Session;
class StudentController extends Controller
{
    //
    public function addData(Request $req){
        print_r($req->all());
           $data=$req->all();
           
           $customer = new Student;
           $result=$customer->addData($data);
           return redirect('/admin')->with('success','Inserted data sucessfully');
          
          }
          //  student registration form list function
          public function stdlist(){
           $customer = new Student;
           $result=$customer->stdlist();
           
           return view('student.stdlist',compact('result'));
       
           
        }
        public function stddis(){
           $customer = new Student;
           $result=$customer->stdlist();
           
           return view('student.stddis',compact('result'));
       
           
        }
        public function edit($id){
               
           $result=Student::find($id);
           return view('student.stdlist',compact('result'));
       
        }
}
