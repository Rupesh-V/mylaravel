<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
use Carbon\Carbon;
use DateTimeZone;
class Admin extends Model
{
    use HasFactory;
    public function list(){
        
        $list=DB::table('cards')->get();
        return $list;
}


public function edit($data){
        
    $list=DB::table('cards')->get();
    return $list;
    
}

public function addNew($data){
    $date=Carbon::now();
    $tz = new DateTimeZone('Asia/Kolkata'); // or whatever zone you're after
    $date->setTimezone($tz);
    $date->format('Y-m-d H:i:s');
    print_r($data);
    $addNew=DB::table('cards')->insert([
        // 'id'=>$data['id'],
        'title'=>$data['title'],
        'content'=>$data['content'],
        'fontawesome'=>$data['fontawesome'],
        'color'=>$data['color'],
        'created_at'=>$date,
        
        // 'created_at'=>$data['save();'],
        
         
    ]);
    
     
    return $addNew; 
}

}
