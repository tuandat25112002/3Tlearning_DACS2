 <div class="table-responsive ">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
      {{--       <th>#</th> --}}
            <th>Mã SV</th>
            <th>Họ và tên</th>
            <th>Lớp</th>
            <th>Ngày sinh</th>
            <th>Email</th>
            <th>Tổng điểm</th>
            <th style="width: 20%;">Thao tác</th>
          </tr>
        </thead>
        <tbody>

            @if($sinhvien==null || empty($sinhvien) || sizeof($sinhvien)==0)
                <tr><td colspan="9" class="text-center">Không có sinh viên</td></tr>
            @endif
          @foreach($sinhvien as $key=>$sv)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
          {{--   <td>{{$key+1}}</td> --}}
            <td>{{$sv->MaSV}}</td>
            <td>{{$sv->hoten}}</td>
            <td>{{$sv->ClassModel->nameclass}}</td>
            <td>{{$sv->ngaysinh}}</td>
            <td>{{$sv->email}}</td>
            <td>{{$sv->tongdiem}}</td>
            <td>
              <a href="{{route('sinhvien.edit',[$sv->id])}}" class="btn btn-primary">Sửa</a>
                              <form action="{{route('sinhvien.destroy',[$sv->id])}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button onclick ="return confirm('Bạn có muốn chắc xóa sinh viên này?');" class="btn btn-danger">Delete</button>
                              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $sinhvien->links() }}
    </div>
