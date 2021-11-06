<?php

namespace App\Http\Controllers;
use App\Models\Social; //sử dụng model Social
use Socialite; //sử dụng Socialite
use App\Models\Login; //sử dụng model Login
use Illuminate\Http\Request;
use App\Models\GiaoVien;
use App\Models\ThiSinh;
use App\Models\Danhmuc;
use App\Models\Lophoc;
use DB;
use Session;
// use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
           $admin_name = Session::get('admin_name');
        if($admin_name){
             return view('admin.dashboard_layout');
        }
        else{

        return view('admin');
    }
    }
     public function show_Dashboard(){

        return view('admin.dashboard_layout');
    }
    public function login_admin(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);
        $result = DB::table('logins')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
        // var_dump($admin_password);
        if($result!=null){
            Session::put('admin_name',$result->admin_name);
            Session::put('id',$result->admin_id);

            return redirect('/dashboard');
        }
        else{
           Session::put('message','Mật khẩu hoặc email không chính xác');
           return redirect('/admin');
        }
    }
    public function ThongKe(){
        return view('admin.thongke');
    }
    public function logout(Request $request){
        // echo 'Đăng xuất';

        $request->session()->put('admin_name', null);
        $request->session()->put('admin_id', null);
        return redirect('/admin');
            }
      public function search(Request $request){
         $keyword =$request->result;
         $quequan =$request->quequan;
         $danhsachthisinh=ThiSinh::get();
        $listthisinh= ThiSinh::where('QueQuan','like','%'.$quequan.'%')->where('TenThiSinh','like','%'.$keyword.'%')->orWhere('MaSo','like','%'.$keyword.'%')->get();

        return view('admincp.thisinh.index')->with(compact('listthisinh','danhsachthisinh'));
    }
    public function PhanLop($idlop){
        $danhmucsanpham = Danhmuc::with('Lophoc')->where('id_lop','like',$idlop)->orderBy('id','desc')->get();
        $lophoc=Lophoc::all();
        return view('admincp.danhmuc.index')->with(compact('danhmucsanpham','lophoc'));
    }
    public function login_facebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function callback_facebook(){
        $provider = Socialite::driver('facebook')->user();
        $account = Social::where('provider','facebook')->where('provider_user_id',$provider->getId())->first();
        if($account){
            //login in vao trang quan tri
            $account_name = Login::where('admin_id',$account->user)->first();
            Session::put('admin_name',$account_name->admin_name);
 // Session::put('admin_id',$account_name->admin_id);
            return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');
        }else{

            $hieu = new Social([
                'provider_user_id' => $provider->getId(),
                'provider' => 'facebook'
            ]);

            $orang = Login::where('admin_email',$provider->getEmail())->first();

            if(!$orang){
                $orang = Login::create([
                    'admin_name' => $provider->getName(),
                    'admin_email' => $provider->getEmail(),
                    'admin_password' => '',
                    // 'admin_status' => 1

                ]);
            }
            $hieu->login()->associate($orang);
            $hieu->save();

            $account_name = Login::where('admin_id',$account->user)->first();

            Session::put('admin_name',$account_name->admin_name);
             // Session::put('admin_id',$account_name->admin_id);
            return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');
        }
    }


    public function login_google(){
        return Socialite::driver('google')->redirect();
   }
public function callback_google(){
        $users = Socialite::driver('google')->stateless()->user();

        $authUser = $this->findOrCreateUser($users,'google');
        if($authUser){
        $account_name = Login::where('admin_id',$authUser->user)->first();
        Session::put('admin_name',$account_name->admin_name);
        Session::put('admin_id',$account_name->admin_id);
        }
        else if($customer_new){
              $account_name = Login::where('admin_id',$customer_new->user)->first();
             Session::put('admin_name',$account_name->admin_name);
             Session::put('admin_id',$account_name->admin_id);
        }
        return redirect('/dashboard')->with('message', 'Đăng nhập Admin thành công');

    }
    public function findOrCreateUser($users,$provider){
        $authUser = Social::where('provider_user_id', $users->id)->first();
        if($authUser){
            return $authUser;
        }else{
             $customer_new = new Social([
            'provider_user_id' => $users->id,
            'provider' => strtoupper($provider)
        ]);

        $orang = Login::where('admin_email',$users->email)->first();

            if(!$orang){
                $orang = Login::create([
                    'admin_name' => $users->name,
                    'admin_email|unique:logins' => $users->email,
                    'admin_password' => '',

                    'admin_phone' => '',
                    'admin_status' => 1
                ]);
            }
        $customer_new ->login()->associate($orang);
        $customer_new ->save();
        // var_dump($customer_new);
        // die();
        return $customer_new ;
        }



    }


}
