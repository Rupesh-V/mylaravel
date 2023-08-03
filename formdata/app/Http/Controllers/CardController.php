<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Card;
use Illuminate\Support\Facades\DB;

class CardController extends Controller
{
   
   public function list(){
      $customer = new Card;
      $result=$customer->list();
      
      return view('welcome',compact('result'));

      
   }

}
