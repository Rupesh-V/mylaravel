<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Redirect;
use Session;
use DB;

class Customer extends Model
{
    use HasFactory;
    public function addDetails($data){
        print_r($data);
        $addDetails=DB::table('otm_data')->insert([
            'fullname'=>$data['name'],
            'email'=>$data['email'],
            'zipcode'=>$data['zip']
        ]);
        return $addDetails; 
    }
    
}

