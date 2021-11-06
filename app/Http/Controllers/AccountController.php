<?php

namespace App\Http\Controllers;
use App\Models\Nguoidung;
use App\Models\Hocsinh;
use App\Models\Giaovien;
use Illuminate\Http\Request;
use Mail;
use App\Mail\TestMail;
use Session;
use App\Models\Cart;
session_start();
class AccountController extends Controller
{
    public function sendemail($data,$randdata){
           $email = $data['email'];
           $code=$randdata;
           $details=[
                'title'=>'Mã xác nhận Email của bạn',
                'body'=>'Đây là mail test chơi thôi nhé'
           ];
           Mail::to($email)->send(new TestMail($details,$code));

    }
    public function create(Request $request){

        $data=$request->validate([
            'email'=>'required|unique:nguoidung',
            'hodem'=>'required',
            'ten'=>'required',
            'password' => 'required|unique:nguoidung|min:8',
            'confirmpassword' => 'required|same:password',
            'idquyen'=>'required',
            '_token'=>'required',
        ],
        [
            'email.unique'=>'Email đã tồn tại',
            'password.unique'=>'Mật khẩu đã được sử dụng',
            'confirmpassword.same'=>'Mật khẩu xác nhận không chính xác',
        ],
    );



            $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZZ';

            $randdata= substr(str_shuffle($permitted_chars), 0, 6);


            $request->session()->put('data', $data);
            $request->session()->put('randdata', $randdata);

            if($data['idquyen']==1){
            return view('formdangky.hocsinh');
            }
            else{
             return view('formdangky.giaovien');
            }
    }
    public function storeUser(Request $request){

        $data= Session::get('data');
        $randdata= Session::get('randdata');
        $email = $data['email'];

        $info=$request->all();
        $request->session()->put('info', $info);


        $this->sendemail($data,$randdata);
        return view('viewmail.confirmemail');
    }

    public function confirmemail(Request $request){
        $randdata = Session::get('randdata');
        $data = Session::get('data');
        $info = Session::get('info');

        if($data['idquyen'] == 1){
            $thongbao="";
        }
        else{
            $thongbao="Người dùng là giáo viên cần phải qua kiểm duyệt của quản trị trang web";
        }
        $maxacnhan = $request->maxacnhan;
        if($randdata == $maxacnhan){
            $this->store($data, $info);
            $request->session()->put('data', null);
            $request->session()->put('randdata', null);
            $request->session()->put('info', null);
            return view('viewmail.successconfirm')->with(compact('thongbao'));
        }
        else{
            Session::put('status','Bạn đã nhập sai mã xác nhận Email');
            return view('viewmail.confirmemail');
        }

    }
    public function store($data, $info){


        $password = md5($data['password']);
        $conpass=md5($data['confirmpassword']);

        $nguoidung= new Nguoidung();
        $nguoidung->email=$data['email'];
        $nguoidung->hodem=$data['hodem'];
        $nguoidung->ten=$data['ten'];
        $nguoidung->password=$password;
        $nguoidung->phanquyen=$data['idquyen'];
        $nguoidung->token=$data['_token'];
        $nguoidung->save();
        if($data['idquyen']==1){
        $hocsinh = new Hocsinh();
        $hocsinh->email=$data['email'];
        $hocsinh->avatar="";
        $hocsinh->ngaysinh=$info['ngaysinh'];
        $hocsinh->idlop=$info['idlop'];
        $hocsinh->save();
        }
        else{
            $giaovien = new GiaoVien();
        $giaovien->hodem =$data['hodem'];
        $giaovien->ten =$data['ten'];
        $giaovien->email =$data['email'];
        $giaovien->gioitinh=$info['gioitinh'];
        $giaovien->sodienthoai =$info['sdt'];
        $giaovien->CMND =$info['cmnd'];
        $giaovien->ngaysinh =$info['ngaysinh'];
        $giaovien->gioithieu=$info['gioithieu'];
        $giaovien->kichhoat=1;
        //thêm ảnh vào folder example.jpg
        // $get_image= $info['avatar'];
        // $path='public/upload/giaovien';
        // $get_name_image = $get_image->getClientOriginalName();
        // $name_image =current(explode('.',$get_name_image));
        // $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        // $get_image->move($path,$new_image);

        $giaovien->avatar="";

        $giaovien->save();

        }

    }
    public function checklogin(Request $request){
        $data=$request->validate([
            'email'=>'required',
            'password'=>'required',
        ]);
        $taikhoan=Nguoidung::where('email',$data['email'])->where('password',md5($data['password']))->first();

        if(isset($taikhoan)){
            Session::put('taikhoan',$taikhoan);
            $data = Session::get('taikhoan');
            if($taikhoan->phanquyen==0){
                $info=Giaovien::where('email',$taikhoan->email)->first();
            }
            else{
                $info=Hocsinh::where('email',$taikhoan->email)->first();
            }
            $acc = Nguoidung::where('email',$taikhoan['email'])->first();
            $id_user= $acc['id_user'];
            $carts=Cart::with('Sanpham','Nguoidung')
                ->join('sanphams','sanphams.sanpham_id','=','carts.id_sanpham')
                ->join('giao_viens','giao_viens.id','=','sanphams.id_giaovien')
                ->join('danhmucs','danhmucs.id','=','sanphams.id_danhmuc')
                ->join('lophocs','idlop','=','danhmucs.id_lop')
                ->orderBy('carts.id','desc')
                ->where('id_user',$id_user)
                ->get();
             Session::put('carts',$carts);
             Session::put('info',$info);
            return redirect()->to('/home');
        }
        else{
            return redirect()->back()->with('status','Bạn đã nhập sai mật khẩu hoặc email !');
        }
    }

    // logout
    public function logout(){
        Session::put('taikhoan',null);
        Session::put('info',null);
         Session::put('carts',null);
        return redirect()->to('/home');
    }
}
