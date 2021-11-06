@extends('formdangky.formthongtin')
@section('form-content')
 <form method="POST" action="{{URL::to('/register/addinfor')}}">
        @csrf


        <div class="form-group mb-3">
          <label for="ngaysinh">Ngày sinh:</label>
          <input type="date" value="{{old('ngaysinh')}}" required name="ngaysinh"  class="form-control">
        </div>


        <div class="form-group mb-3">
          <label for="password">Học sinh thuộc lớp:</label>
          <select name="idlop" class="form-select mt-2">
                  <option value="10">Lớp 10</option>
                  <option value="11">Lớp 11</option>
                  <option value="12">Lớp 12</option>

          </select>
        </div>

        <div class="w-100">
          <button type="submit" class="btn btn-class float-left"><span>Bước tiếp</span></button>
          </div>
          <div class="mt-2">Nếu đã có tài khoản hãy <a href="{{URL::to('login')}}">Đăng nhập</a></div>

      </form>
@endsection
