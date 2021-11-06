<?php
namespace App\Repositories;
use App\Models\Student;
use App\Models\ClassModel;
class LophocRepository
{
     public function all(){
      return ClassModel::get();
    }
    public function findID($id){
        return ClassModel::find($id);
    }
}



?>
