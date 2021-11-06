<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ClassModel;

class Student extends Model
{
      use HasFactory;

     public $timestamps = false;//set time to false
    protected $fillable =[
        'idclass','MaSV','hoten','ngaysinh','email','tongdiem'
    ];
     protected $primaryKey = 'id';
    protected $talbe = 'students';
    public function ClassModel(){
        return $this->belongsTo('App\Models\ClassModel','idclass','idclass');
    }

}

