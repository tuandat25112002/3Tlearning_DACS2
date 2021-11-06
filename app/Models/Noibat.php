<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Noibat extends Model
{
    use HasFactory;
    public $timestamps = false;//set time to false
    protected $fillable =[
        'tennoibat'
    ];
    protected $primaryKey = 'id';
    protected $talbe = 'noibats';
     public function Sanpham(){
        return $this->hasMany('App\Models\Sanpham');
      }
}
