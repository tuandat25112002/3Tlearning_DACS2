<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
class ClassModel extends Model
{
    use HasFactory;

     public $timestamps = false;//set time to false
    protected $fillable =[
        'idclass','nameclass'
    ];
     protected $primaryKey = 'idclass';
     protected $talbe = 'class_models';
     public function Student(){
        return $this->hasMany('App\Models\Student');
      }
}
