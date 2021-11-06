<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GiaoVien;
use App\Models\Sanpham;
use App\Models\Danhmuc;
use App\Models\Lophoc;
use App\Models\Baihoc;
use App\Models\Tailieu;
use Session;

session_start();

class IndexController extends Controller
{
    //    public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function home()
    {
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

        $giaoviens = GiaoVien::where('kichhoat',0)->get();
        $lophoc = Lophoc::orderBy('idlop','desc')->get();
        $monhoc= Danhmuc::get();
        $khoahocmoi= Sanpham::with('Danhmuc','GiaoVien')->where('idnoibat',1)->orderBy('sanpham_id','desc')->get();
        $khoahocthi= Sanpham::with('Danhmuc','GiaoVien')->where('idnoibat',2)->orderBy('sanpham_id','desc')->get();
        $khoahochot= Sanpham::with('Danhmuc','GiaoVien')->orderBy('luotxem','desc')->limit(10)->get();
        $khoahocs= Sanpham::join('danhmucs','danhmucs.id','=','sanphams.id_danhmuc')
                    ->join('lophocs','lophocs.idlop','=','danhmucs.id_lop')
                    ->orderBy('sanphams.sanpham_id','desc')
                    ->get();

         return view('pages.homepage')->with(compact('lophoc','monhoc','khoahocmoi','khoahocs','khoahochot','khoahocthi','giaoviens','khoahocforme'));

    }
    public function khoahoc($slug,$id){

        $lophoc = Lophoc::orderBy('idlop','desc')->limit(6)->get();
        $khoahoc= Sanpham::with('Danhmuc','GiaoVien')->find($id);
        $luotxem = $khoahoc->luotxem + 1;
        $khoahoc->luotxem=$luotxem;
        $khoahoc->save();
        $baihoc= Baihoc::with('Sanpham')->where('id_sanpham',$id)->limit(3)->get();
        $baihocs= Baihoc::with('Sanpham')->where('id_sanpham',$id)->get();
        $monhoc= Danhmuc::get();
        return view('pages.khoahoc')->with(compact('monhoc','lophoc','khoahoc','baihoc','baihocs'));
    }
    public function lockhoahoc(Request $request){
         $lophoc = Lophoc::orderBy('idlop','desc')->get();
         $monhoc= Danhmuc::with('Lophoc')->get();
         $maxprice=Sanpham::orderBy('price','desc')->first();
            if(isset($request->maxprice) && isset($request->maxprice)){
                $max= filter_var($request->maxprice,FILTER_SANITIZE_NUMBER_INT);
                $min= filter_var($request->minprice,FILTER_SANITIZE_NUMBER_INT);
            }
            else{
                $max=$maxprice->price;
                $min=0;
            }

          // if(isset($request->hienthi))){

          //   }

          $hienthi="desc";
         $khoahocduocloc = Sanpham::join('danhmucs','danhmucs.id','=','sanphams.id_danhmuc')
                        ->join('lophocs','lophocs.idlop','=','danhmucs.id_lop')
                        ->whereRaw('price*((100-discount)*0.01) <='.$max)
                        ->whereRaw('price*((100-discount)*0.01) >='.$min)
                        ->orderByRaw('price*((100-discount)*0.01) '.$hienthi)
                        ->get();
          if($max >= $min){
           return view('pages.lockhoahoc')->with(compact('lophoc','monhoc','khoahocduocloc','maxprice','max','min'));

           }
           else{
                $errors= "Lỗi giá trị lọc: Chú ý giá trị Min phải nhỏ hơn hoặc bằng giá trị Max !";
             return view('pages.lockhoahoc')->with(compact('lophoc','monhoc','khoahocduocloc','maxprice','max','min','errors'));

           }
    }
    public function ajaxlockhoahoc(Request $request){
        if($request->ajax()){
         $lophoc = Lophoc::orderBy('idlop','desc')->get();
         $monhoc= Danhmuc::with('Lophoc')->get();
         $maxprice=Sanpham::orderBy('price','desc')->first();
            if(isset($request->maxprice) && isset($request->maxprice)){
                $max= filter_var($request->maxprice,FILTER_SANITIZE_NUMBER_INT);
                $min= filter_var($request->minprice,FILTER_SANITIZE_NUMBER_INT);
            }
            else{
                $max=$maxprice->price;
                $min=0;
            }
           if(isset($request->hienthi)){
              $hienthi=$request->hienthi;
            }
            else{
          $hienthi="desc";
          }
         $khoahocduocloc = Sanpham::join('danhmucs','danhmucs.id','=','sanphams.id_danhmuc')
                        ->join('lophocs','lophocs.idlop','=','danhmucs.id_lop')
                        ->where('sanphams.price','<=',$max)
                        ->where('sanphams.price','>=',$min)
                        ->orderByRaw('price*((100-discount)*0.01) '.$hienthi)
                        ->get();
           return view('pages.pagination.lockhoahoc')->with(compact('lophoc','monhoc','khoahocduocloc','maxprice','max','min'));
    }}
    public function tatcakhoahoc(Request $request){
         $lophoc = Lophoc::orderBy('idlop','desc')->get();
          $monhoc= Danhmuc::with('Lophoc')->get();
            $maxprice=Sanpham::orderBy('price','desc')->first();
            if(isset($request->maxprice) && isset($request->maxprice)){
                $max= filter_var($request->maxprice,FILTER_SANITIZE_NUMBER_INT);
                $min= filter_var($request->minprice,FILTER_SANITIZE_NUMBER_INT);
            }
            else{
                $max=$maxprice->price;
                $min=0;
            }

            $khoahoc12=Sanpham::join('danhmucs','danhmucs.id','=','sanphams.id_danhmuc')
                        ->join('lophocs','lophocs.idlop','=','danhmucs.id_lop')
                        ->where('lophocs.idlop',12)
                        ->where('id_danhmuc','!=',0)
                        ->where('sanphams.price','<=',$max)
                        ->where('sanphams.price','>=',$min)
                        ->orderBy('sanpham_id','desc')->paginate(6,['*'],'khoahoc12');

              $khoahoc11=Sanpham::join('danhmucs','danhmucs.id','=','sanphams.id_danhmuc')
                        ->join('lophocs','lophocs.idlop','=','danhmucs.id_lop')
                        ->where('lophocs.idlop',11)
                        ->where('id_danhmuc','!=',0)
                        ->where('sanphams.price','<=',$max)
                        ->where('sanphams.price','>=',$min)
                        ->orderBy('sanpham_id','desc')->paginate(6,['*'],'khoahoc11');
              $khoahoc10=Sanpham::join('danhmucs','danhmucs.id','=','sanphams.id_danhmuc')
                        ->join('lophocs','lophocs.idlop','=','danhmucs.id_lop')
                        ->where('lophocs.idlop',10)
                        ->where('id_danhmuc','!=',0)
                        ->where('sanphams.price','<=',$max)
                        ->where('sanphams.price','>=',$min)
                        ->orderBy('sanpham_id','desc')->paginate(6,['*'],'khoahoc10');
          return view('pages.danhsachkhoahoc')->with(compact('lophoc','monhoc','khoahoc12','khoahoc11','khoahoc10','maxprice','max','min'));
    }
    public function danhsachmonhoc($slug,$id){
        $lophoc = Lophoc::orderBy('idlop','desc')->get();
          $monhoc= Danhmuc::with('Lophoc')->get();
          $monduocchon= Danhmuc::find($id);
            $lopduocchon= Lophoc::find($monduocchon->id_lop);
            $maxprice=Sanpham::orderBy('price','desc')->first();
            if(isset($request->maxprice) && isset($request->maxprice)){
                $max= filter_var($request->maxprice,FILTER_SANITIZE_NUMBER_INT);
                $min= filter_var($request->minprice,FILTER_SANITIZE_NUMBER_INT);
            }
            else{
                $max=$maxprice->price;
                $min=0;
            }
          $khoahocduocchon= Sanpham::with('Danhmuc','GiaoVien')->where('id_danhmuc',$monduocchon->id)->orderBy('sanpham_id','desc')->get();


          $khoahoc12=Sanpham::join('danhmucs','danhmucs.id','=','sanphams.id_danhmuc')
                        ->join('lophocs','lophocs.idlop','=','danhmucs.id_lop')
                        ->where('lophocs.idlop',12)
                        // ->where('id_danhmuc','!=',$monduocchon->id)
                        ->orderBy('sanpham_id','desc')->paginate(6,['*'],'khoahoc12');

              $khoahoc11=Sanpham::join('danhmucs','danhmucs.id','=','sanphams.id_danhmuc')
                        ->join('lophocs','lophocs.idlop','=','danhmucs.id_lop')
                        ->where('lophocs.idlop',11)
                        // ->where('id_danhmuc','!=',$monduocchon->id)
                        ->orderBy('sanpham_id','desc')->paginate(6,['*'],'khoahoc11');
              $khoahoc10=Sanpham::join('danhmucs','danhmucs.id','=','sanphams.id_danhmuc')
                        ->join('lophocs','lophocs.idlop','=','danhmucs.id_lop')
                        ->where('lophocs.idlop',10)
                        // ->where('id_danhmuc','!=',$monduocchon->id)
                        ->orderBy('sanpham_id','desc')->paginate(6,['*'],'khoahoc10');
        return view('pages.danhsachkhoahoc')->with(compact('lophoc','monhoc','monduocchon','lopduocchon','khoahocduocchon','khoahoc12','khoahoc11','khoahoc10','maxprice','max','min'));
    }
        public function fetch_data12(){

        $lophoc = Lophoc::orderBy('idlop','desc')->get();
          $monhoc= Danhmuc::with('Lophoc')->get();


          $khoahoc12=Sanpham::join('danhmucs','danhmucs.id','=','sanphams.id_danhmuc')
                        ->join('lophocs','lophocs.idlop','=','danhmucs.id_lop')
                        ->where('lophocs.idlop',12)
                        // ->where('id_danhmuc','!=',$monduocchon->id)
                        ->orderBy('sanpham_id','desc')->paginate(6,['*'],'khoahoc12');


        return view('pages.pagination.khoahoc12')->with(compact('lophoc','monhoc','khoahoc12'));
    }
       public function fetch_data11(){

        $lophoc = Lophoc::orderBy('idlop','desc')->get();
          $monhoc= Danhmuc::with('Lophoc')->get();



          $khoahoc11=Sanpham::join('danhmucs','danhmucs.id','=','sanphams.id_danhmuc')
                        ->join('lophocs','lophocs.idlop','=','danhmucs.id_lop')
                        ->where('lophocs.idlop',11)
                        // ->where('id_danhmuc','!=',$monduocchon->id)
                        ->orderBy('sanpham_id','desc')->paginate(6,['*'],'khoahoc11');


        return view('pages.pagination.khoahoc11')->with(compact('khoahoc11','lophoc','monhoc'));
    }
        public function fetch_data10(){

        $lophoc = Lophoc::orderBy('idlop','desc')->get();
          $monhoc= Danhmuc::with('Lophoc')->get();


          $khoahoc10=Sanpham::join('danhmucs','danhmucs.id','=','sanphams.id_danhmuc')
                        ->join('lophocs','lophocs.idlop','=','danhmucs.id_lop')
                        ->where('lophocs.idlop',10)
                        // ->where('id_danhmuc','!=',$monduocchon->id)
                        ->orderBy('sanpham_id','desc')->paginate(6,['*'],'khoahoc10');


        return view('pages.pagination.khoahoc10')->with(compact('khoahoc10','lophoc','monhoc'));
    }
    public function baihoc($slug,$id){
        $lophoc = Lophoc::orderBy('idlop','desc')->get();
        $monhoc= Danhmuc::get();
        $baihoc= Baihoc::find($id);
        $idkhoahoc=$baihoc->id_sanpham;
          if(!isset($baihoc)){
            return view('pages.404');
        }
        else{
        $firstbaihoc=Baihoc::where('id_sanpham',$idkhoahoc)->where('id_baihoc','<=',$baihoc->id_baihoc)->orderBy('id_baihoc','asc')->first();
        $lastbaihoc=Baihoc::where('id_sanpham',$idkhoahoc)->where('id_baihoc','>=',$baihoc->id_baihoc)->orderBy('id_baihoc','desc')->first();


        $khoahoc=Sanpham::find($idkhoahoc);
        $idgiaovien=$khoahoc->id_giaovien;
        $giaovien=GiaoVien::find($idgiaovien);
        $nextbaihoc=Baihoc::where('id_sanpham',$idkhoahoc)->where('id_baihoc','>',$baihoc->id_baihoc)->orderBy('id_baihoc','asc')->limit(1)->first();
        // var_dump($nextbaihoc);
        $prebaihoc=Baihoc::where('id_sanpham',$idkhoahoc)->where('id_baihoc','<',$baihoc->id_baihoc)->orderBy('id_baihoc','desc')->limit(1)->first();

        // var_dump($prebaihoc);
        // // die();
        $baihocs= Baihoc::where('id_sanpham',$idkhoahoc)->get();
        // var_dump($baihocs);
        // die();
        $tailieus= Tailieu::where('id_baihoc',$baihoc->id_baihoc)->get();
       return view('pages.baihoc')->with(compact('monhoc','lophoc','baihoc','khoahoc','baihocs','giaovien','tailieus','nextbaihoc','prebaihoc','lastbaihoc','firstbaihoc'));
       }
    }

}
