<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Login extends Model
{
    use HasFactory;
    public function login(){
        
        $list=DB::table('logins')->get();
        return $list;
}
}
