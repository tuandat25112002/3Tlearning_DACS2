@extends('dashboard')

@section('admin_content')
{{-- @include('layouts.nav') --}}
{{-- <div class="container">
    <div class="row justify-content-center"> --}}
        <section id="main-content">
        <section class="wrapper ">

        <div class="col-md-12 ">
              <div class="flex-center mb-2">
                @foreach($lophoc as $lop)
                <a href="{{URL::to('danhmuc/lop-'.$lop->idlop)}}" class="btn btn-primary">Lớp {{$lop->tenlop}}</a>

                @endforeach
            </div>
            <div class="card">
                <div class="card-header">Liệt kê môn học</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive" style="overflow-y: hidden;">
                    <table class="table table-striped" >
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Tên môn học</th>
                          <th scope="col">Slug môn học</th>
                          <th scope="col">Lớp</th>
                          <th scope="col">Mô tả</th>
                          <th scope="col">Kích hoạt</th>
                          <th scope="col">Quản lý</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($danhmucsanpham as $key => $danhmuc)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td>{{$danhmuc->tendanhmuc}}</td>
                           <td>{{$danhmuc->slug_danhmuc}}</td>
                           <td>{{$danhmuc->Lophoc->tenlop}}</td>
                          <td>{{$danhmuc->mota}}</td>
                          <td>
                              @if($danhmuc->kichhoat==0)
                                <span class="text text-success text-center">Kích hoạt</span>
                              @else
                                <span class="text text-success text-danger">Không kích hoạt</span>
                              @endif
                          </td>
                          <td>
                                <a href="{{route('danhmuc.edit',[$danhmuc->id])}}" class="btn btn-primary">Sửa</a>
                              <form action="{{route('danhmuc.destroy',[$danhmuc->id])}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button onclick ="return confirm('Bạn có muốn chắc xóa môn học này');" class="btn btn-danger">Delete</button>
                              </form>
                          </td>

                        </tr>
                        @endforeach

                      </tbody>
                    </table>

                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
                @endsection
