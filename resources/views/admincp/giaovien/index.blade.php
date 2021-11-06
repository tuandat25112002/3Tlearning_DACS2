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
                <div class="card-header">Liệt kê danh mục</div>

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
                  {{--         <th scope="col">#</th> --}}
                          <th scope="col">Họ tên GV</th>
                          <th scope="col">Avatar</th>
                          <th scope="col">Số điện thoại</th>

                          <th scope="col">Ngày sinh</th>
                          <th scope="col">Giới thiệu</th>
                          <th scope="col">Email</th>
                          <th scope="col">Giới tính</th>
                          <th scope="col">Quản Lý</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($listgiaovien as $key => $giaovien)
                        <tr>
               {{--            <th scope="row">{{$key+1}}</th> --}}
                          <td>{{$giaovien->hodem}} {{$giaovien->ten}}</td>
                           <td class="avatar">
                            @if($giaovien->avatar!=null)
                            <img src="{{asset('public/upload/giaovien/'.$giaovien->avatar)}}" style="width: 100%"></td>
                            @else
                            Chưa có ảnh...
                            @endif
                           <td>{{$giaovien->sodienthoai}}
                           </td>

                           <td>{{$giaovien->ngaysinh}}</td>
                           <td class="mota">{{$giaovien->gioithieu}}</td>
                           <td>{{$giaovien->email}}</td>
                           <td>
                                @if($giaovien->gioitinh==0)
                                Nam
                                @else
                                Nữ
                                @endif
                           </td>
                           <td>
                              @if($giaovien->kichhoat==0)
                                <span class="text text-success text-center">Kích hoạt</span>
                              @else
                                <span class="text text-success text-danger">Không kích hoạt</span>
                              @endif
                          </td>


                          <td>
                                <a href="{{route('giaovien.edit',[$giaovien->id])}}" class="btn btn-primary">Sửa</a>
                              <form action="{{route('giaovien.destroy',[$giaovien->id])}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button onclick ="return confirm('Bạn chắc chắn xóa ?');" class="btn btn-danger">Delete</button>
                              </form>
                          </td>

                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                    </div>
                         <div class="mt-2 " >
                           {{--  <span><a href="">{{ $listgiaovien->getPageName()}}</a></span> --}}
                            <span>{{ $listgiaovien->render()  }}</span>
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
