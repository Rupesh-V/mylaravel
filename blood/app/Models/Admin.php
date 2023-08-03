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
        
        $list=DB::table('bloods')->get();
        return $list;
}


public function edit($data){
        
    $list=DB::table('bloods')->get();
    return $list;
    // print_r($data);
    // $updates=DB::table('cards')->where('id')->get()->update([
    //     'title'=>$data['title'],
    //     'content'=>$data['content'],
    //     'fontawesome'=>$data['fontawesome'],
    //     'color'=>$data['color']
    // ]);
    // return $updates; 
    
}
// public function destroy($id){

//     $list=DB::table('cards');
//     return $list;
// }
public function addNew($data){
    $date=Carbon::now();
    $tz = new DateTimeZone('Asia/Kolkata'); // or whatever zone you're after
    $date->setTimezone($tz);
    $date->format('Y-m-d H:i:s');
    print_r($data);
    $addNew=DB::table('bloods')->insert([
        // 'id'=>$data['id'],
        'donor_name'=>$data['title'],
        'blood_group'=>$data['content'],
        'date_donotion'=>$data['fontawesome'],
        'quantity'=>$data['color'],
        'created_at'=>$date,
        
        
        
         
    ]);
    
     
    return $addNew; 
}

}
