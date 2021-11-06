@extends('formdangky.formthongtin')
@section('form-content')
 <form method="POST" action="{{URL::to('/register/addinfor')}}">
        @csrf


        <div class="form-group mb-3">
          <label for="ngaysinh">Ngày sinh:</label>
          <input type="date" value="{{old('ngaysinh')}}" required name="ngaysinh"  class="form-control">
        </div>
        <div class="form-group mb-3">
          <label for="ngaysinh">Số điện thoại liên lạc:</label>
          <input type="tel" pattern="[0]{1}[0-9]{9}" value="{{old('sdt')}}" required name="sdt"  class="form-control">
        </div>
        <div class="form-group mb-3">
          <label for="ngaysinh">Số CMND:</label>
          <input type="text" value="{{old('cmnd')}}" required name="cmnd"  class="form-control">
        </div>
          <div class="form-group mb-3">
          <label for="gioithieu">Thông tin về bản thân:</label>
          <textarea class="form-control" placeholder="Chuyên ngành gì ? Sở thích, sở trường, tài năng..." name="gioithieu" rows="3">{{old('sdt')}}</textarea>
        </div>

        <div class="form-group mb-3">
          <label for="password">Giới tính:</label>
          <select name="gioitinh" class="form-select mt-2">
                  <option value="0">Nam</option>
                  <option value="1">Nữ</option>
          </select>
        </div>

        <div class="w-100">
          <button type="submit" class="btn btn-class float-left"><span>Bước tiếp</span></button>
          </div>
          <div class="mt-2">Nếu đã có tài khoản hãy <a href="{{URL::to('login')}}">Đăng nhập</a></div>

      </form>
@endsection
