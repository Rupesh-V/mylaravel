<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Redirect;
use Session;
use DB;
use DateTimeZone;

class Customer extends Model
{
    use HasFactory;
    public function addDetails($data){
        print_r($data);
        $date=Carbon::now();
        $tz = new DateTimeZone('Asia/Kolkata'); // or whatever zone you're after

$date->setTimezone($tz);
$date->format('Y-m-d H:i:s');

        $addDetails=DB::table('otm_data')->insert([
            'fullname'=>$data['name'],
            'email'=>$data['email'],
            'zipcode'=>$data['zip'],
            'created_at'=>$date,
        ]);
        
        return $addDetails; 
    }
    public function conDetails($contact){
        print_r($contact);
        $conDetails=DB::table('contacts')->insert([
            'email'=>$contact['email'],
            'messages'=>$contact['message']
            
        ]);
        return $conDetails; 
    }
    public function list(){
        
        $list=DB::table('otm_data')->paginate(5);
        return $list;
}

    
}

