<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Baihoc;
use App\Models\Sanpham;



class BaihocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

         {
         // $listgiaovien= Baihoc::with()->orderBy('id_baihoc','desc')->get();
        $baihoc= Baihoc::with('Sanpham')->orderBy('id_baihoc','desc')->get();
        return view('admincp.baihoc.index')->with(compact('baihoc'));

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sanpham= Sanpham::orderBy('sanpham_id','desc')->get();

        return view('admincp.baihoc.create')->with(compact('sanpham'));
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
            'tieude'=> 'required|max:255',
            'slug_baihoc'=> 'required|max:255',
            'tomtat' => 'required|max:255',
            'kichhoat'=>'required',
            'id_sanpham'=>'required',
            'noidung'=>'required',


        ],
        [
            'tieude.unique'=>'Tên bài học đã tồn tại, Hãy nhập một tên mới',
            'tieude.required'=>'Bạn phải nhập tên sản phẩm',
            'slug_baihoc.required'=>'Bạn phải nhập tên sản phẩm để có slug',
            'slug_baihoc.unique'=>'Tên slug đã bị trùng lặp',
            'tomtat.required'=>'Bạn phải nhập tóm tắt mô tả cho sản phẩm',
            'noidung.required' => 'Bạn phải thêm nội dung cho bài học',

        ],
    );
        $baihoc = new Baihoc();
        $baihoc->tieude =$data['tieude'];

        $baihoc->slug_baihoc =$data['slug_baihoc'];
        $baihoc->tomtat =$data['tomtat'];
        $baihoc->kichhoat =$data['kichhoat'];
        $baihoc->noidung =$data['noidung'];
        $baihoc->id_sanpham=$data['id_sanpham'];

        $baihoc->save();
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
        $baihoc= Baihoc::find($id);
        $sanpham= Sanpham::orderBy('sanpham_id','desc')->get();
        return view('admincp.baihoc.edit')->with(compact('sanpham','baihoc'));
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
            'tieude'=> 'required|max:255',
            'slug_baihoc'=> 'required|max:255',
            'tomtat' => 'required|max:255',
            'kichhoat'=>'required',
            'id_sanpham'=>'required',
            'noidung'=>'required',

        ],
        [

            'tieude.required'=>'Bạn phải nhập tên sản phẩm',
            'slug_baihoc.required'=>'Bạn phải nhập tên sản phẩm để có slug',

            'tomtat.required'=>'Bạn phải nhập tóm tắt mô tả cho sản phẩm',
            'noidung.required' => 'Bạn phải thêm nội dung cho bài học',

        ],
    );
        $baihoc = Baihoc::find($id);
        $baihoc->tieude =$data['tieude'];
        $baihoc->slug_baihoc =$data['slug_baihoc'];
        $baihoc->tomtat =$data['tomtat'];

        $baihoc->kichhoat =$data['kichhoat'];
        $baihoc->noidung =$data['noidung'];
        $baihoc->id_sanpham=$data['id_sanpham'];

        $baihoc->save();
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
       Baihoc::find($id)->delete();
       return redirect()->back()->with('status','Xóa thành công');
    }
}
