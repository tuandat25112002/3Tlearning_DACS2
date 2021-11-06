<?php
if(isset($_GET['page']) && $_GET['page']>$listgiaovien->lastPage()){
   header('location:dashboard/404');
   die();
    }
else {
?>
@extends('dashboard')

@section('admin_content')
{{-- @include('layouts.nav') --}}
{{-- <div class="container">
    <div class="row justify-content-center"> --}}

    <style type="text/css">
    td.avatar{
        max-width: 100px;
    }
        td.mota{
             max-width: 200px;
             overflow: hidden;
             text-overflow: ellipsis;
             white-space: nowrap;
          }
         ::-webkit-scrollbar {
          height: 10px;
          width: 10px;
          border-radius: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
          background: #f1f1f1;
     /*     border-radius: 10px;*/
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
          background: #888;
          border-radius: 10px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
          background: #555;
        }

    </style>

        <section id="main-content">
        <section class="wrapper ">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">Danh sách tài liệu</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                    <table class="table table-striped" style="width: 100%;">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Tên tài liệu</th>
                          <th scope="col">Thuộc bài học</th>
                          <th scope="col">File</th>
                          <th scope="col">Ngày cập nhật</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($tailieus as $key => $tailieu)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td>{{$tailieu->tenfile}}</td>
                          <td>{{$tailieu->Baihoc->tieude}}</td>
                          <td><a href="{{URL::to('/download',$tailieu->id)}}">{{$tailieu->file}} <i class="fa fa-download"></i></a></td>
                          <td>{{$tailieu->ngaycapnhat}}</td>



                          <td>
                                <a href="{{route('tailieu.edit',[$tailieu->id])}}" class="btn btn-primary">Sửa</a>
                              <form action="{{route('tailieu.destroy',[$tailieu->id])}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button onclick ="return confirm('Bạn có muốn chắc xóa tài liệu này');" class="btn btn-danger">Delete</button>
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
<?php } ?>
