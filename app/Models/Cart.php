<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;


     public $timestamps = false;//set time to false
    protected $fillable =[
        'id_sanpham','date','id_user'
    ];
     protected $primaryKey = 'id';
     protected $talbe = 'carts';
     public function Sanpham(){
        return $this->belongsTo('App\Models\Sanpham','id_sanpham','sanpham_id');
      }
    public function Nguoidung(){
        return $this->belongsTo('App\Models\Nguoidung','id_user','id_user');
      }

}
