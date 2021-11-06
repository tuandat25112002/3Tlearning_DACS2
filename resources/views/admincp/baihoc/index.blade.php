
@extends('dashboard')

@section('admin_content')
<style type="text/css">
       td.mota{
             max-width: 200px;
             overflow: hidden;
             text-overflow: ellipsis;
             white-space: nowrap;
          }
</style>
           td.mota{
             max-width: 200px;
             overflow: hidden;
             text-overflow: ellipsis;
             white-space: nowrap;
          }
       <section id="main-content">
        <section class="wrapper ">

    <div class="row justify-content-center">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">Liệt kê bài học</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Tên bài học</th>

                          <th scope="col">Slug bài học</th>


                          <th scope="col">Tóm tắt</th>
                          <th scope="col">Nội dung</th>

                          <th scope="col">Thuộc khóa học</th>
                          <th scope="col">Kích hoạt</th>
                          <th scope="col">Quản lý</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($baihoc as $key => $list)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td>{{$list->tieude}}</td>
                          <td>{{$list->slug_baihoc}}</td>

                          <td class="mota">{{$list->tomtat}}</td>
                          <td class="mota">{{$list->noidung}}</td>



                          <td>
                             {{$list->Sanpham->tensanpham}}
                          </td>
                          <td>
                              @if($list->kichhoat==0)
                                <span class="text text-success text-center">Kích hoạt</span>
                              @else
                                <span class="text text-success text-danger">Không kích hoạt</span>
                              @endif
                          </td>
                          <td>
                                <a href="{{route('baihoc.edit',[$list->id_baihoc])}}" class="btn btn-primary">Sửa</a>
                              <form action="{{route('baihoc.destroy',[$list->id_baihoc])}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button onclick ="return confirm('Bạn có muốn chắc xóa sản phẩm này?');" class="btn btn-danger">Delete</button>
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
           </section>
       </section>
                @endsection
