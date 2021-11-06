<?php
namespace App\Repositories;
use App\Models\Student;
use App\Models\ClassModel;
use Illuminate\Http\Request;
class SinhVienRepository
{

     public function all(){
        return Student::paginate(5);
    }
    public function filterID($id){

        return Student::with('ClassModel')->where('idclass',$id)->orderBy('id','desc')->paginate(5);
    }
    public function findID($id){
      return Student::with('ClassModel')->find($id);
    }
    public function storeData($request){

            $data= $request->validate([
            'hoten'=> 'required|max:255',
            'MaSV'=> 'required|unique:students|max:255',
            'ngaysinh'=>'required',
            'email'=> 'required|max:255',
            'tongdiem'=> 'required',
            'idlop'=> 'required',


        ],
        [
            'hoten.required'=>'Bạn phải nhập họ tên của sinh viên',
            'MaSV.required'=>'Ban phải nhập mã SV của sinh viên',
            'MaSV.unique'=>'Mã SV đã tồn tại',

            'ngaysinh.required'=>'Bạn chọn ngày sinh của sinh viên',
            'tongdiem.required'=>'Bạn phải nhập tổng điểm của sinh viên',
            'email.required'=>'Bạn phải nhập quê quán của sinh viên',

        ],
    );

        $sinhvien = new Student();
        $sinhvien->hoten =$data['hoten'];
        $sinhvien->MaSV =$data['MaSV'];
        $sinhvien->ngaysinh =$data['ngaysinh'];
        $sinhvien->email =$data['email'];
        $sinhvien->idclass =$data['idlop'];
        $sinhvien->tongdiem =$data['tongdiem'];
        $sinhvien->save();
        $idclass =$data['idlop'];
        $lophoc = ClassModel::find($idclass);
        $soluong=($lophoc->soluong)+1;
        $lophoc->soluong=$soluong;
        $lophoc->save();
    }
    public function updateData($request, $id){
        $data= $request->validate([
            'hoten'=> 'required|max:255',
            'MaSV'=> 'required|max:255',
            'ngaysinh'=>'required',
            'email'=> 'required|max:255',
            'tongdiem'=> 'required',
            'idlop'=> 'required',


        ],
        [
            'hoten.required'=>'Bạn phải nhập họ tên của sinh viên',
            'MaSV.required'=>'Ban phải nhập mã SV của sinh viên',


            'ngaysinh.required'=>'Bạn chọn ngày sinh của sinh viên',
            'tongdiem.required'=>'Bạn phải nhập tổng điểm của sinh viên',
            'email.required'=>'Bạn phải nhập quê quán của sinh viên',

        ],
    );
        $sinhvien = Student::find($id);
        $sinhvien->hoten =$data['hoten'];
        $sinhvien->MaSV =$data['MaSV'];
        $sinhvien->ngaysinh =$data['ngaysinh'];
        $sinhvien->email =$data['email'];
        $sinhvien->idclass =$data['idlop'];
        $sinhvien->tongdiem =$data['tongdiem'];
        $sinhvien->save();
    }
}



?>
