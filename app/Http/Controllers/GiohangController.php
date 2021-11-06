<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GiaoVien;
use App\Models\Sanpham;
use App\Models\Danhmuc;
use App\Models\Lophoc;
use App\Models\Baihoc;
use App\Models\Tailieu;
use App\Models\Cart;
use App\Models\Nguoidung;
use Session;
use DB;
class GiohangController extends Controller
{
    // giỏ hàng
    public function cartstore(Request $request)
    {

        if(sizeof($request->all())!=0){
            $infocart=$request->all();
            $this->addcart($infocart);
        }
        $taikhoan = Session::get('taikhoan');
        $acc = Nguoidung::where('email',$taikhoan['email'])->first();
        $id_user= $acc['id_user'];
        $carts= DB::table('carts')
                ->select('carts.id','sanphams.tensanpham','sanphams.sanpham_id','sanphams.price','sanphams.discount','sanphams.hinhanh','sanphams.slug_sanpham','danhmucs.tendanhmuc','giao_viens.avatar','giao_viens.gioitinh','giao_viens.hodem','giao_viens.ten','lophocs.tenlop')
                ->join('sanphams','sanphams.sanpham_id','=','carts.id_sanpham')
                ->join('giao_viens','giao_viens.id','=','sanphams.id_giaovien')
                ->join('danhmucs','danhmucs.id','=','sanphams.id_danhmuc')
                ->join('lophocs','idlop','=','danhmucs.id_lop')
                ->orderBy('carts.id','desc')
                ->where('id_user',$id_user)
                ->get();
         Session::put('carts',$carts);
        $lophoc = Lophoc::orderBy('idlop','desc')->get();
        $monhoc= Danhmuc::get();

        if(Session::get('taikhoan')!=null)
        {
            $taikhoan = Session::get('taikhoan');
            if($taikhoan['phanquyen']==1){
            $info=Session::get('info');
            $idlop=$info['idlop'];
        $khoahocforme= Sanpham::with('GiaoVien','Danhmuc')->join('danhmucs','danhmucs.id','=','sanphams.id_danhmuc')
                                ->where('danhmucs.id_lop',$idlop)
                                ->get()
                                ;

            }
            else{
                $khoahocforme=null;
            }
        }
        else{
            $khoahocforme=null;
        }

        return view('pages.giohang')->with(compact('lophoc','monhoc','khoahocforme','carts'));
    }
    public function addcart($infocart)
    {
        $taikhoan = Session::get('taikhoan');
        $acc = Nguoidung::where('email',$taikhoan['email'])->first();
        $id_user= $acc['id_user'];
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $date = date('Y-m-d');

        $cart= new Cart();
        $cart->id_sanpham=$infocart['id_khoahoc'];
        $cart->date=$date;
        $cart->id_user=$id_user;
        $cart->save();
    }
    public function delete($id){

        Cart::find($id)->delete();
        $carts = Cart::get();
        Session::put('carts',$carts);
        return redirect()->back();
    }
}
