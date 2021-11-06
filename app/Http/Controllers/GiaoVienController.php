<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GiaoVien;
use App\Models\Sanpham;
use App\Models\Nguoidung;
class GiaoVienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $listgiaovien = GiaoVien::orderBy('id','desc')->paginate(5);
        return view('admincp.giaovien.index')->with(compact('listgiaovien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admincp/giaovien/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
        $data= $request->validate([
            'hodem'=> 'required|max:255',
            'ten'=> 'required|max:255',
            'email' => 'required|unique:giao_viens|max:255',
            'avatar'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:10000|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000',
            'CMND'=>'required',
            'ngaysinh'=>'required',
            'gioithieu'=>'required',
            'gioitinh'=>'required',
            'kichhoat'=>'required',

            'sodienthoai'=>'required|unique:giao_viens|max:255',
        ],
        [
            'email.unique'=>'Email đã tồn tại, Hãy nhập một email mới',
            'email.required'=>'Bạn phải nhập email của giáo viên',
            'sodienthoai.unique'=>'Số điện thoại đã tồn tại, Hãy nhập mới',
            'sodienthoai.required'=>'Bạn phải nhập số điện thoại của giáo viên',
            'hodem.required'=>'Bạn phải nhập họ đệm của giáo viên',
            'ten.required'=>'Bạn phải nhập tên của giáo viên',
            'avatar.required' => 'Bạn phải thêm hình ảnh đại diện cho giáo viên!',
            'ngaysinh.required' => 'Nhập ngày sinh của giáo viên!',
            'gioithieu.required' => 'Nhập giới thiệu về giáo viên',
            'CMND.required' => 'Bạn phải nhập CMND của giáo viên!',
        ],
    );
        $giaovien = new GiaoVien();
        $giaovien->hodem =$data['hodem'];
        $giaovien->ten =$data['ten'];
        $giaovien->email =$data['email'];
        $giaovien->gioitinh=$data['gioitinh'];
        $giaovien->sodienthoai =$data['sodienthoai'];
        $giaovien->CMND =$data['CMND'];
        $giaovien->ngaysinh =$data['ngaysinh'];
        $giaovien->gioithieu=$data['gioithieu'];
        $kichhoat->kichhoat=$data['kichhoat'];
        //thêm ảnh vào folder example.jpg
        $get_image= $request->avatar;
        $path='public/upload/giaovien';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image =current(explode('.',$get_name_image));
        $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);

        $giaovien->avatar=$new_image;

        $giaovien->save();
        return redirect()->back()->with('status','Thêm thành công rồi!');

    }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

         $giaovien= GiaoVien::find($id);

        return view('admincp.giaovien.edit')->with(compact('giaovien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $data= $request->validate([
            'hodem'=> 'required|max:255',
            'ten'=> 'required|max:255',
            'email' => 'required|max:255',
              'CMND'=>'required',
            'ngaysinh'=>'required',
            'gioithieu'=>'required',
            'gioitinh'=>'required',
            'kichhoat'=>'required',
            'sodienthoai'=>'required|max:255',
        ],
        [
            'email.required'=>'Bạn phải nhập email của giáo viên',
            'sodienthoai.required'=>'Bạn phải nhập số điện thoại của giáo viên',
            'hodem.required'=>'Bạn phải nhập họ đệm của giáo viên',
            'ten.required'=>'Bạn phải nhập tên của giáo viên',

            'ngaysinh.required' => 'Nhập ngày sinh của giáo viên!',
            'gioithieu.required' => 'Nhập giới thiệu về giáo viên',
            'CMND.required' => 'Bạn phải nhập CMND của giáo viên!',
        ],
    );
        $giaovien = GiaoVien::find($id);
        $giaovien->hodem =$data['hodem'];
        $giaovien->ten =$data['ten'];
        $giaovien->email =$data['email'];
        $giaovien->gioitinh=$data['gioitinh'];
        $giaovien->sodienthoai =$data['sodienthoai'];
        $giaovien->CMND =$data['CMND'];
        $giaovien->ngaysinh =$data['ngaysinh'];
        $giaovien->gioithieu=$data['gioithieu'];
        $giaovien->kichhoat=$data['kichhoat'];
        //thêm ảnh vào folder example.jpg
          $get_image= $request->avatar;
        $path='public/upload/giaovien/'.$giaovien->avatar;
        if($get_image){
            if(file_exists($path)){
            unlink($path);
        }
        $path='public/upload/giaovien';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image =current(explode('.',$get_name_image));
        $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);

        $giaovien->avatar=$new_image;
}
        $giaovien->save();

        return redirect()->back()->with('status','Cập nhật thành công rồi!');


}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
      {
        $giaovien = GiaoVien::find($id);
        $email = $giaovien->email;
        if($giaovien->avatar!=null){
            $path='public/upload/giaovien/'.$giaovien->avatar;
            if(file_exists($path)){
                unlink($path);
            }
        }
        Nguoidung::where('email',$email)->first()->delete();
        GiaoVien::find($id)->delete();
        Sanpham::where('id_giaovien',$id)->delete();
        return redirect()->back()->with('status','Đã xóa sản phẩm này');
    }
}
