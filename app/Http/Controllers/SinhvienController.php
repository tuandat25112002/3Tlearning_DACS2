<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassModel;
use App\Models\Student;
use App\Models\Lophoc;
use App\Repositories\SinhVienRepository;
use App\Repositories\LophocRepository;

class SinhvienController extends Controller
{
    private $SinhVienRepository;
    private $LophocRepository;
    public function __construct(SinhVienRepository $SinhVienRepository, LophocRepository $LophocRepository){
        $this->SinhVienRepository= $SinhVienRepository;
        $this->LophocRepository= $LophocRepository;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

          $lophoc=$this->LophocRepository->all();

         $sinhvien = $this->SinhVienRepository->all();

        return view('sinhvien.index')->with(compact('sinhvien','lophoc'));
    }
    public function fetch_data(Request $request){

            if($request->ajax()){
             $lophoc=$this->LophocRepository->all();
           $sinhvien =  $this->SinhVienRepository->all();
            return view('sinhvien.pagination')->with(compact('sinhvien','lophoc'))->render();
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
        {
            $lophoc=$this->LophocRepository->all();
            return view('sinhvien.create')->with(compact('lophoc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $this->SinhVienRepository->storeData($request);
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

           $lophoc=$this->LophocRepository->all();
         $sinhvien=$this->SinhVienRepository->filterID($id);



        return view('sinhvien.index')->with(compact('sinhvien','lophoc'));
    }
    public function timkiemtheolop(Request $request){
          $id=$request->lop;
          $lophoc=$this->LophocRepository->all();
         $sinhvien=$this->SinhVienRepository->filterID($id);
         return view('sinhvien.index')->with(compact('sinhvien','lophoc','id'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $sinhvien=$this->SinhVienRepository->findID($id);
          $lophoc=$this->LophocRepository->all();
            return view('sinhvien.edit')->with(compact('lophoc','sinhvien'));
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
        $this->SinhVienRepository->updateData($request, $id);
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
        $student=$this->SinhVienRepository->findID($id);
        $idclass=$student->idclass;
        $lophoc=$this->LophocRepository->findID($idclass);
        $soluong=($lophoc->soluong)-1;
        $lophoc->soluong=$soluong;
        $lophoc->save();
        $student->delete();
        return redirect()->back()->with('status','Xóa thành công');
    }
}
