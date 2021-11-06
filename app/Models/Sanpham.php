<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    use HasFactory;

    public $timestamps = false;//set time to false
    protected $fillable =[
        'tensanpham','motasanpham','price','discount','kichhoat,slug_sanpham','id_danhmuc','hinhanh','id_giaovien','idnoibat','luotxem'

    ];
    protected $primaryKey = 'sanpham_id';
    protected $talbe = 'sanphams';

      public function Danhmuc(){
        return $this->belongsTo('App\Models\Danhmuc','id_danhmuc','id');
    }
     public function GiaoVien(){
        return $this->belongsTo('App\Models\GiaoVien','id_giaovien','id');
    }
     public function Noibat(){
        return $this->belongsTo('App\Models\Noibat','idnoibat','id');
    }
    public function Baihoc(){
        return $this->hasMany('App\Models\Baihoc');
    }
    public function Cart(){
        return $this->hasMany('App\Models\Cart');
    }
}
