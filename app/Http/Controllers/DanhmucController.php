<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Danhmuc;
use App\Models\Sanpham;
use App\Models\Lophoc;
class DanhmucController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $danhmucsanpham = Danhmuc::with('Lophoc')->where('id_lop','like',10)->orderBy('id','desc')->get();
        $lophoc=Lophoc::all();
        return view('admincp.danhmuc.index')->with(compact('danhmucsanpham','lophoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lophoc=Lophoc::orderBy('idlop','desc')->get();
        return view('admincp.danhmuc.create')->with(compact('lophoc'));
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
            'tendanhmuc'=> 'required|max:255',
            'slug_danhmuc'=> 'required|max:255',
            'mota' => 'required|max:255',
            'kichhoat'=>'required',
            'id_lop'=>'required',

        ],
        [
            'tendanhmuc.unique'=>'Tên danh mục đã tồn tại, Hãy nhập một tên mới',
            'slug_danhmuc.unique'=>'Slug danh mục đã tồn tại, Hãy nhập một slug khác',
            'tendanhmuc.required'=>'Bạn phải nhập tên danh mục',
            'mota.required'=>'Bạn phải nhập mô tả cho danh mục',

        ],
    );
        $danhmuc = new Danhmuc();
        $danhmuc->tendanhmuc =$data['tendanhmuc'];
        $danhmuc->id_lop =$data['id_lop'];
        $danhmuc->slug_danhmuc =$data['slug_danhmuc'];
        $danhmuc->mota =$data['mota'];
        $danhmuc->kichhoat =$data['kichhoat'];
        $danhmuc->save();
        return redirect()->back()->with('status','Thêm thành công!');

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

        // return view('admincp.danhmuc.edit');
         $danhmuc= Danhmuc::find($id);
          $lophoc=Lophoc::orderBy('idlop','desc')->get();
         return view('admincp.danhmuc.edit')->with(compact('danhmuc','lophoc'));
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
        $data=$request->validate([
            'tendanhmuc'=>'required|max:255',
             'slug_danhmuc'=> 'required|max:255',
            'mota'=>'required|max:255',
            'kichhoat'=>'required',
            'id_lop'=>'required',


        ],
        [
            'tendanhmuc.required'=>'Không được để trống Tên Danh Mục',
            'slug_danhmuc.required'=>'Không được để trống Slug Danh Mục',
            'mota.required'=>'Không được để trống Mô tả Danh Mục',


        ],
    );
            $danhmuc= Danhmuc::find($id);
            $danhmuc->tendanhmuc=$data['tendanhmuc'];
            $danhmuc->id_lop=$data['id_lop'];
            $danhmuc->slug_danhmuc=$data['slug_danhmuc'];
            $danhmuc->mota=$data['mota'];
            $danhmuc->kichhoat=$data['kichhoat'];
            $danhmuc->save();
            return redirect()->back()->with('status','Cập nhật thành công');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Danhmuc::find($id)->delete();


        Sanpham::where('id_danhmuc',$id)->delete();
        return redirect()->back()->with('status','Đã xóa sản phẩm này');
    }

}
