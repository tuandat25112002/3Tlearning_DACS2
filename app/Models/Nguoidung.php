<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nguoidung extends Model
{

     use HasFactory;
        public $timestamps = false;
    protected $fillable = [
          'email',  'password',  'hodem','ten','phanquyen'
    ];

    protected $primaryKey = 'id_user';
    protected $table = 'nguoidung';
    public function Cart(){
        return $this->hasMany('App\Models\Cart');
    }
}
