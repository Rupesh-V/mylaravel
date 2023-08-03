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
public function addData($data){
    print_r($data);
    $date=Carbon::now();
        $tz = new DateTimeZone('Asia/Kolkata'); // or whatever zone you're after
        $date->setTimezone($tz);
        $date->format('Y-m-d H:i:s');
    
    $addData=DB::table('students')->insert([
        'firstname'=>$data['fname'],
        'lastname'=>$data['lname'],
        'mothersname'=>$data['mname'],
        'fathersname'=>$data['fname'],
        'email'=>$data['email'],
        'phone'=>$data['phn'],
        'address'=>$data['address'],
        'pincode'=>$data['pincode'],
        'state'=>$data['state'],
        'city'=>$data['city'],
        'gender'=>$data['inlineRadioOptions'],
        'dob'=>$data['dob'],
        'marrital'=>$data['marrital'],
        'nationality'=>$data['nationality'],
        'educationlevel'=>$data['educationlevel'],
        'collegen'=>$data['collegen'],
        'startyear'=>$data['startyear'],
        'endyear'=>$data['endyear'],
        'degree'=>$data['degree'],
        'stream'=>$data['stream'],
        'perfscale'=>$data['perfscale'],
        'perfomance'=>$data['perfomance'],
        'intercompletedyear'=>$data['intercompletedyear'],
        'board'=>$data['board'],
        'perfmscale'=>$data['perfmscale'],
        'grades'=>$data['grades'],
        'groupname'=>$data['groupname'],
        'intercoll'=>$data['intercoll'],
        'matriculationcompleted'=>$data['matriculationcompleted'],
        'maticulationboard'=>$data['maticulationboard'],
        'schlname'=>$data['schlname'],
        'perfrmncescale'=>$data['perfrmncescale'],
        'matriculationpoints'=>$data['matriculationpoints'],
        'account_holders_name'=>$data['account_holders_name'],
        'account_number'=>$data['account_number'],
        'pan_number'=>$data['pan_number'],
        'bank_name'=>$data['bank_name'],
        'branch_name'=>$data['branch_name'],
        'ifsc_code'=>$data['ifsc_code'],
        'created_at'=>$date,
        
    ]);
    
    return $addData;
}
    
}

