<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanpham;
use App\Models\Danhmuc;
use App\Models\GiaoVien;
use App\Models\Noibat;
class SanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $noibats=Noibat::get();
        $sanpham= Sanpham::with('Danhmuc','GiaoVien','Noibat')->orderBy('sanpham_id','desc')->paginate(5);
        return view('admincp.sanpham.index')->with(compact('sanpham','noibats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function fetch_data(Request $request)
    {
         $noibats=Noibat::get();
        if($request->ajax()){
        $sanpham= Sanpham::with('Danhmuc','GiaoVien')->orderBy('sanpham_id','desc')->paginate(5);
        return view('admincp.sanpham.pagination')->with(compact('sanpham','noibats'))->render();
        }
    }
    public function khoahocnoibat(Request $request){
        $data= $request->all();
        $khoahoc=Sanpham::find($data['khoahoc_id']);
        $khoahoc->idnoibat=$data['khoahocnoibat'];
        $khoahoc->save();
    }
    public function create()
    {
               $noibats=Noibat::get();
        $danhmuc=Danhmuc::orderBy('id','desc')->get();
        $giaovien= GiaoVien::orderBy('id','desc')->get();
        return view('admincp.sanpham.create')->with(compact('danhmuc','giaovien','noibats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $data= $request->validate([
            'tensanpham'=> 'required|max:255',
            'slug_sanpham'=> 'required|max:255',
            'motasanpham' => 'required',
            'hinhanh'=>'required|image|mimes:jpg,png,jpeg,gif,svg|max:10000|dimensions:min_width=100,min_height=100,max_width=2000,max_height=2000',
            'kichhoat'=>'required',
            'idnoibat'=>'required',
            'price'=>'required',
            'discount'=>'required',
            'danhmuc'=>'required',
            'id_giaovien'=>'required',
        ],
        [
            'tensanpham.unique'=>'Tên khóa học đã tồn tại, Hãy nhập một tên mới',
            'tensanpham.required'=>'Bạn phải nhập tên khóa học',
            'slug_sanpham.required'=>'Bạn phải nhập tên khóa học để có slug',
            'motasanpham.required'=>'Bạn phải nhập mô tả cho khóa học',
            'price.required'=>'Bạn phải nhập giá của khóa học',
            'hinhanh.required' => 'Bạn phải thêm hình ảnh cho khóa học!'
        ],
    );
        $sanpham = new Sanpham();
        $giasanpham= filter_var($request->price,FILTER_SANITIZE_NUMBER_INT);
        $sanpham->tensanpham =$data['tensanpham'];
        $sanpham->slug_sanpham =$data['slug_sanpham'];
        $sanpham->id_giaovien=$data['id_giaovien'];
        $sanpham->price=$giasanpham;
         $sanpham->luotxem=0;
        $sanpham->discount=$data['discount'];
        $sanpham->motasanpham =$data['motasanpham'];
        $sanpham->idnoibat =$data['idnoibat'];
        $sanpham->kichhoat =$data['kichhoat'];
        $sanpham->id_danhmuc=$data['danhmuc'];
        //thêm ảnh vào folder example.jpg
        $get_image= $request->hinhanh;
        $path='public/upload/sanpham';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image =current(explode('.',$get_name_image));
        $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);

        $sanpham->hinhanh=$new_image;

        $sanpham->save();
        return redirect()->back()->with('status','Thêm thành công rồi!');

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
        $noibats=Noibat::get();
        $giaovien= GiaoVien::orderBy('id','desc')->get();
        $sanpham= Sanpham::find($id);
         $danhmuc=Danhmuc::orderBy('id','desc')->get();

        return view('admincp.sanpham.edit')->with(compact('sanpham','danhmuc','giaovien','noibats'));
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
            'tensanpham'=> 'required|max:255',
            'slug_sanpham'=> 'required|max:255',
            'motasanpham' => 'required',
             'kichhoat'=>'required',
              'price'=>'required',
              'idnoibat'=>'required',
            'discount'=>'required',
            'danhmuc'=>'required',
            'id_giaovien'=>'required',

        ],
        [
            // 'tensanpham.unique'=>'Tên khóa học đã tồn tại, Hãy nhập một tên mới',
            // 'tensanpham.required'=>'Bạn phải nhập tên khóa học',
            'slug_sanpham.required'=>'Bạn phải nhập tên khóa học để có slug',
            'motasanpham.required'=>'Bạn phải nhập mô tả cho khóa học',
        ],
    );
        $giasanpham= filter_var($request->price,FILTER_SANITIZE_NUMBER_INT);
        // echo $giasanpham;
         $luotxem= filter_var($request->luotxem,FILTER_SANITIZE_NUMBER_INT);
        $sanpham = Sanpham::find($id);
        $sanpham->tensanpham =$data['tensanpham'];
        $sanpham->slug_sanpham =$data['slug_sanpham'];
        $sanpham->motasanpham =$data['motasanpham'];
        $sanpham->price= $giasanpham;
        $sanpham->luotxem= $luotxem;
        $sanpham->discount=$data['discount'];
         $sanpham->idnoibat=$data['idnoibat'];
        $sanpham->id_giaovien=$data['id_giaovien'];
        $sanpham->kichhoat =$data['kichhoat'];
        $sanpham->id_danhmuc=$data['danhmuc'];
        //thêm ảnh vào folder example.jpg
        $get_image= $request->hinhanh;
        $path='public/upload/sanpham/'.$sanpham->hinhanh;
        if($get_image){
            if(file_exists($path)){
            unlink($path);
        }
        $path='public/upload/sanpham';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image =current(explode('.',$get_name_image));
        $new_image= $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);

        $sanpham->hinhanh=$new_image;
}
        $sanpham->save();
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
        $sanpham = Sanpham::find($id);
        $path='public/upload/sanpham/'.$sanpham->hinhanh;
        if(file_exists($path)){
            unlink($path);
        }
        Sanpham::find($id)->delete();
        return redirect()->back()->with('status','Đã xóa khóa học này');
    }
}
