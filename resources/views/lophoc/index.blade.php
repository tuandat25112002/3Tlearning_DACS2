@extends('dashboard')
@section('admin_content')
<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      QUẢN LÝ LỚP HỌC
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <select class="input-sm form-control w-sm inline v-middle">
          <option value="0">Bulk action</option>
          <option value="1">Delete selected</option>
          <option value="2">Bulk edit</option>
          <option value="3">Export</option>
        </select>
        <button class="btn btn-sm btn-default">Apply</button>
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        <div class="input-group">
          <input type="text" class="input-sm form-control" placeholder="Search">
          <span class="input-group-btn">
            <button class="btn btn-sm btn-default" type="button">Search</button>
          </span>
        </div>
      </div>
    </div>
    <div class="w-80 m-2">
     @if (session('status'))
                        <div class="alert alert-success p-2" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    </div>
    <div class="table-responsive ">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>#</th>
            <th>Lớp</th>
            <th>Số lượng</th>
            <th style="width: 20%;">Thao tác</th>
          </tr>
        </thead>
        <tbody>
          @foreach($lophoc as $key=>$lop)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{$key+1}}</td>
            <td><a href="{{URL::to('sinhvien/'.$lop->idclass)}}">{{$lop->nameclass}}</a></td>
            <td>{{$lop->soluong}}</td>
            <td>
              <a href="{{route('lophoc.edit',[$lop->idclass])}}" class="btn btn-primary">Sửa</a>
                              <form action="{{route('lophoc.destroy',[$lop->idclass])}}" method="POST">
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
    <footer class="panel-footer">
      <div class="row">

        <div class="col-sm-5 text-center">
          <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
        </div>
        <div class="col-sm-7 text-right text-center-xs">
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
</section>
@endsection
