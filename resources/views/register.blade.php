<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng ký tài khoản 3T</title>
</head>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
<style type="text/css">
    @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
body{
    font-family: 'Poppins', sans-serif;
    background-color: #00ac96;

}
.content{
    margin: 5% 3%;
    background-color: #fff;
    padding: 2rem 1rem 2rem 1rem;
    box-shadow: 0 0 5px 5px rgba(0,0,0, .05);
}
.signin-text{
    font-style: normal;
    font-weight: 600 !important;

}
.form-control{
    display: block;
    width:100%;
    font-size: 1rem;
    font-weight: 400;
    line-height:1.5;
    border-color: #00ac96 !important;
    border-style: solid !important;
    border-width: 0 0 1px 0 !important;
    padding: 0px !important;
    color:#495057;
    height: auto;
    border-radius: 0;
    background-color: #fff;
    background-clip: padding-box;
}


.form-control:focus{

    color: #495057;
    background-color: #fff;
    border-color: #fff;
    outline: 0;
    box-shadow: none;
}
.birthday-section{
    padding: 15px;
}
.btn-class{
      border-color: #00ac96;
      color: #00ac96;
      text-align: center;
      padding: 10px;
      width: 120px;
      transition: all 0.3s;
      cursor: pointer;
      margin: 5px;
}
.btn-class:hover{
    background-color:  #00ac96;
    color: #fff;
}
.btn-class span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.btn-class span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.2s;
}
.btn-class:hover span {
  padding-right: 15px;
}

.btn-class:hover span:after {
  opacity: 1;
  right: 0px;
}



li.login-facebook{
    background-color: #53a3fa;
    padding: 10px;
    border-radius: 20px;
    text-align: center;
    transition: 0.5s;
}

li.login-facebook:hover{
    background-color: #4a93dd;
}
.login-facebook a{
    text-decoration: none;
    font-size: 15px;
    color: whitesmoke;
}
li.login-gmail{
    background-color: red;
    padding: 10px;
    border-radius: 20px;
    text-align: center;
    transition: 0.5s;
}
.login-gmail a{
    text-decoration: none;
    font-size: 15px;
    color: whitesmoke;
}
li.login-gmail:hover{
    background-color: #d12121;
}
.form-select{
    border: 1px solid #00ac96;
}
</style>
<div class="container">
  <div class="row content" style="border-radius: 20px;">

    <div class="col-md-5">
      <h3 class="signin-text mb-3"> Đăng Ký</h3>

      @if (session('thongbao'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('thongbao') }}
                        </div>
                    @endif
      @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-unstyled">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
     @endif
      <form method="POST" action="{{URL::to('register/create')}}">
        @csrf
        <div class="form-group mb-3">
          <label for="email">Email:</label>
          <input type="email" required name="email" value="{{old('email')}}" class="form-control">
        </div>
        <div class="row">
        <div class="form-group col-md-6 mb-3">
          <label for="hodem">Họ đệm:</label>
          <input type="text" value="{{old('hodem')}}" required name="hodem"  class="form-control">
        </div>
        <div class="form-group col-md-6 mb-3">
          <label for="hodem">Tên:</label>
          <input type="text" required name="ten" value="{{old('ten')}}"  class="form-control">
        </div>
        </div>
        <div class="form-group mb-3">
          <label for="password">Mật khẩu:</label>
          <input type="password" p pattern="(?=.*\d)(?=.*[a-z]).{8,}"
            title="Nhập nhiều hơn 8 ký tự và gồm cả ký tự chữ lẫn ký tự số" required name="password" class="form-control">
        </div>
        <div class="form-group mb-3">
          <label for="password">Xác nhận mật khẩu:</label>
          <input type="password" required name="confirmpassword" class="form-control">
        </div>
        <div class="form-group mb-3">
           <label for="idquyen">Bạn là: </label>
          <select name="idquyen" class="form-select">
            <option value="1">Học sinh</option>
            <option value="0">Giáo viên</option>
          </select>

        </div>
        <div class="w-100">
          <button class="btn btn-class float-left"><span>Đăng ký</span></button>
          </div>
          <div class="mt-2">Nếu đã có tài khoản hãy <a href="{{URL::to('login')}}">Đăng nhập</a></div>
        <div class="row mt-2">
            <ul style="list-style: none;">
             {{--    <li class="login-facebook"><a href=""><i class="fa-brands fa-facebook"></i> Đăng nhập bằng Facebook</a></li> --}}
                <li class="login-gmail mt-2"><a href=""><i class="fa-brands fa-google-plus"></i> Đăng nhập bằng Google</a></li>
             {{--    <li><a href="">Đăng nhập bằng facebook</a></li> --}}
            </ul>
        </div>

      </form>
    </div>
     <div class="col-md-7 pt-5">
        <img src="{{asset('public/upload/imagelogin/68393c4a6c881e6367e19ee769937eab.png')}}" style="width: 100%;">
      </div>
  </div>
</div>

</body>
</html>
