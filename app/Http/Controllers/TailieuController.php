<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Tailieu;
use App\Models\Baihoc;
use App\Models\Giaovien;
use App\Models\Sanpham;

class TailieuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $tailieus=Tailieu::with('Baihoc')->get();
       return view('admincp.tailieu.index')->with(compact('tailieus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $baihocs=Baihoc::get();
        return view('admincp.tailieu.create')->with(compact('baihocs'));
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
            'ngaycapnhat'=> 'required',
            'id_baihoc'=> 'required',
            'tenfile'=> 'required|max:255',
            'file'=>'required|file',
        ],
        [
            'id_baihoc.required'=>'Bạn phải chọn bài học',
            'tenfile.required'=>'Bạn phải nhập tên file',
            'file.required'=>'chưa có file nào đăng lên cả',

        ],
    );
        $tailieu = new Tailieu();
        $tailieu->id_baihoc =$data['id_baihoc'];
        $tailieu->tenfile =$data['tenfile'];
        $tailieu->ngaycapnhat =$data['ngaycapnhat'];

        $get_file=$request->file;
        $path='public/upload/tailieu';
        $get_name_file= $get_file->getClientOriginalName();
        $name =current(explode('.',$get_name_file));
        $new_file=$name.'.'.$get_file->getClientOriginalExtension();
        $get_file->move($path,$new_file);
        $tailieu->file=$new_file;
        $tailieu->save();
        return redirect()->back()->with('status','Thêm tài liệu thành công');
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
        $tailieu=Tailieu::with('Baihoc')->find($id);
        $baihocs=Baihoc::get();
        return view('admincp.tailieu.edit')->with(compact('baihocs','tailieu'));
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
            'ngaycapnhat'=> 'required',
            'id_baihoc'=> 'required',
            'tenfile'=> 'required|max:255',
            'file'=>'required|file',
        ],
        [
            'id_baihoc.required'=>'Bạn phải chọn bài học',
            'tenfile.required'=>'Bạn phải nhập tên file',
            'file.required'=>'chưa có file nào đăng lên cả',

        ],
    );
        $tailieu = Tailieu::find($id);
        $tailieu->id_baihoc =$data['id_baihoc'];
        $tailieu->tenfile =$data['tenfile'];
        $tailieu->ngaycapnhat =$data['ngaycapnhat'];

        $get_file=$request->file;

        $path='public/upload/giaovien/'.$tailieu->file;
        if($get_file){
            if(file_exists($path)){
            unlink($path);
        }
        $path='public/upload/tailieu';
        $get_name_file= $get_file->getClientOriginalName();
        $name =current(explode('.',$get_name_file));
        $new_file=$name.'.'.$get_file->getClientOriginalExtension();
        $get_file->move($path,$new_file);
        $tailieu->file=$new_file;
        $tailieu->save();
        return redirect()->back()->with('status','Cập nhật tài liệu thành công');


    }
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $tailieu= Tailieu::find($id);
        $path='public/upload/tailieu/'.$tailieu->file;
        if(file_exists($path)){
            unlink($path);
        }
        Tailieu::find($id)->delete();
        return redirect()->back()->with('status','Đã xóa tài liệu này');

    }
    public function download($id, Request $request){
        $tailieu=Tailieu::find($id);
        $file=$tailieu->file;
        $path='upload/tailieu';
        return response()->download(public_path($path.'/'.$file));
    }
}
