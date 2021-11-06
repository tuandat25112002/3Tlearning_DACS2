<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassModel;
use DB;
class LophocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lophoc=DB::table('class_models')
        ->orderBy('idclass','desc')
        ->get();
        return view('lophoc.index')->with(compact('lophoc'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lophoc.create');
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
            'nameclass'=> 'required|max:255',
            'soluong'=> 'required|max:255',


        ],
        [
            'nameclass.required'=>'Hãy nhập tên lớp',
            'soluong.required'=>'Nhập số lượng',

        ],
    );
             $lophoc=new ClassModel();
            $lophoc->nameclass=$data['nameclass'];
            $lophoc->soluong=$data['soluong'];
            $lophoc->save();
            return redirect()->back()->with('status','Thêm thành công');
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
        $lophoc=ClassModel::find($id);
        return view('lophoc.edit')->with(compact('lophoc'));
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
            'nameclass'=> 'required|max:255',
            'soluong'=> 'required|max:255',


        ],
        [
            'nameclass.required'=>'Hãy nhập tên lớp',
            'soluong.required'=>'Nhập số lượng',

        ],
    );
             $lophoc=ClassModel::find($id);
            $lophoc->nameclass=$data['nameclass'];
            $lophoc->soluong=$data['soluong'];
            $lophoc->save();
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
           ClassModel::find($id)->delete();
        Student::where('idclass',$id)->delete();
        return redirect()->back()->with('status','Xóa thành công');
    }
}
