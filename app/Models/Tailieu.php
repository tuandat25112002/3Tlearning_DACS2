<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tailieu extends Model
{
     use HasFactory;

    public $timestamps = false;//set time to false
    protected $fillable =[
        'id_baihoc','tenfile','file','ngaycapnhat'

    ];
    protected $primaryKey = 'id';
    protected $talbe = 'tailieus';

    public function Baihoc(){
        return $this->belongsTo('App\Models\Baihoc','id_baihoc','id_baihoc');
    }
}
