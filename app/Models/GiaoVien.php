<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiaoVien extends Model
{
    use HasFactory;

    public $timestamps = false;//set time to false
    protected $fillable =[
        'hodem','ten','avatar','sodienthoai','CMND','ngaysinh','gioithieu','email','gioitinh','kichhoat'

    ];
    protected $primaryKey = 'id';
    protected $talbe = 'giao_viens';


      // public function Baihoc(){
      //   return $this->hasMany('App\Models\Baihoc');
      // }
      public function Sanpham(){
        return $this->hasMany('App\Models\Sanpham');
      }
}
