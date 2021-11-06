<?php
namespace App\Repositories;
use Illuminate\Http\Request;
use App\Models\GiaoVien;
use App\Models\Sanpham;
use App\Models\Danhmuc;
use App\Models\Lophoc;
use App\Models\Baihoc;
use App\Models\Tailieu;
use App\Models\Cart;
use App\Models\Nguoidung;
class GiohangRepository
{
     public function showallcart(){
      return ClassModel::get();
    }

}



?>
