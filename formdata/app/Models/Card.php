<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;
class Card extends Model
{
    use HasFactory;
    public function list(){
        
        $list=DB::table('cards')->get();
        return $list;
}
}
