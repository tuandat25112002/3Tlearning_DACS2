<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Danhmuc extends Model
{
    use HasFactory;

    public $timestamps = false;//set time to false
    protected $fillable =[
        'tendanhmuc','mota','kichhoat,slug_danhmuc'

    ];
    protected $primaryKey = 'id';
    protected $talbe = 'danhmucs';

    public function Sanpham(){
        return $this->hasMany('App\Models\Sanpham');
    }
    public function Lophoc(){
        return $this->belongsTo('App\Models\Lophoc','id_lop','idlop');
    }
}
