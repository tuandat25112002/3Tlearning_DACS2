@extends('dashboard')
@section('admin_content')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <!-- page start-->

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            CẬP NHẬT SINH VIÊN
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                              @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="POST" action="{{route('sinhvien.update',[$sinhvien->id])}}" novalidate="novalidate">
                                     @method('PUT')
                                     @csrf
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Mã sinh viên: </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" readonly value="{{$sinhvien->MaSV}}" id="firstname" name="MaSV" type="text">
                                        </div>
                                    </div>
                                      <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Họ và Tên: </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" value="{{$sinhvien->hoten}}" id="firstname" name="hoten" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Ngày sinh: </label>
                                        <div class="col-lg-6">
                                        <input type="date" class="form-control" name="ngaysinh" value="{{$sinhvien->ngaysinh}}" min="1993-01-01" max="2007-12-31"  ></div>
                                    </div>
                                     <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Email: </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" value="{{$sinhvien->email}}" id="firstname" name="email" type="email">
                                        </div>
                                    </div>
                                     <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Lớp: </label>
                                        <div class="col-lg-6">
                                            <select class="form-control" name="idlop">
                                                <option selected value="{{$sinhvien->ClassModel->idclass}}">{{$sinhvien->ClassModel->nameclass}}</option>
                                                @foreach($lophoc as $lop)
                                                <option value="{{$lop->idclass}}">{{$lop->nameclass}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                      <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Tổng điểm: </label>
                                        <div class="col-lg-6">
                                             <input type="number" step="0.05" min="0" max="10" class="form-control" name="tongdiem" value="{{$sinhvien->tongdiem}}"  >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                      <button class="btn btn-primary" type="submit">Cập nhật</button>
                                            <a href="{{route('sinhvien.index')}}" class="btn btn-default" type="button">Xem danh sách</a>
                                        </div>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
</section>
@endsection
