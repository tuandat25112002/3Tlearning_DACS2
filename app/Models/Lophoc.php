<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lophoc extends Model
{
    use HasFactory;

    public $timestamps = false;//set time to false
    protected $fillable =[
        'idlop','tenlop'

    ];
    protected $primaryKey = 'idlop';
    protected $talbe = 'lophocs';

    public function Danhmuc(){
        return $this->hasMany('App\Models\Danhmuc');
    }
}
