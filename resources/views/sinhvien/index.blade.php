
@extends('dashboard')
@section('admin_content')

<section id="main-content">
    <section class="wrapper">
        <div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
      QUẢN LÝ SINH VIÊN
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
        <form action="{{URL::to('/timkiemtheolop')}}" method="get">
        <select name="lop" class="input-sm form-control w-sm inline v-middle">
               @foreach($lophoc as $lop)
                    @if(isset($id))
                        @if($lop->idclass==$id)
                                 <option selected value="{{$lop->idclass}}">{{$lop->nameclass}}</option>
                        @else
                              <option value="{{$lop->idclass}}">{{$lop->nameclass}}</option>
                        @endif
                    @else
                       <option value="{{$lop->idclass}}">{{$lop->nameclass}}</option>
                    @endif
          @endforeach
        </select>
        <button class="btn btn-sm btn-default" type="submit">Xem danh sách lớp</button>
        </form>
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
        <div class="col-md-12">
            <a href="{{route('sinhvien.index')}}" class="btn btn-link">Xem tất cả</a>

        </div>
        <div id="table_data">
            @include('sinhvien.pagination')
        </div>
    <footer class="panel-footer">
{{--       <div class="row">

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
      </div> --}}
    </footer>
  </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
       $(document).on('click', '.page-item a', function(event) {
           event.preventDefault();
           var page = $(this).attr('href').split('page=')[1];
           fetch_data(page);

       });
       function fetch_data(page){
            $.ajax({
                url:"{{URL::to('/pagination/load_data')}}",
                data:"page="+ page,
                success:function(data)
                {
                    $('#table_data').html(data);
                }
            });


       }
    });
</script>
</section>
@endsection
