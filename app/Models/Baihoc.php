<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Baihoc extends Model
{
    use HasFactory;

    public $timestamps = false;//set time to false
    protected $fillable =[
        'id_sanpham','tieude','slug_baihoc','tomtat','noidung','kichhoat'

    ];
    protected $primaryKey = 'id_baihoc';
    protected $talbe = 'baihocs';

    public function Sanpham(){
        return $this->belongsTo('App\Models\Sanpham','id_sanpham','sanpham_id');
    }
      public function Tailieu(){
        return $this->hasMany('App\Models\Tailieu');
      }

}
