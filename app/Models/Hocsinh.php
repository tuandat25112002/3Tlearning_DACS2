<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hocsinh extends Model
{
    use HasFactory;
     public $timestamps = false;//set time to false
    protected $fillable =[
        'email','avatar','ngaysinh','idlop'

    ];
    protected $primaryKey = 'id_hocsinh';
    protected $talbe = 'hocsinhs';


      // public function Baihoc(){
      //   return $this->hasMany('App\Models\Baihoc');
      // }
      public function Nguoidung(){
        return $this->belongsTo('App\Models\Nguoidung','email','email');
      }
}
