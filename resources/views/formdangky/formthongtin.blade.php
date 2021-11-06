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
      <h3 class="signin-text mb-3"> Thông tin thành viên mới</h3>

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
        @yield('form-content')
    </div>
     <div class="col-md-7 pt-5">
        <img src="{{asset('public/upload/imagelogin/68393c4a6c881e6367e19ee769937eab.png')}}" style="width: 100%;">
      </div>
  </div>
</div>

</body>
</html>
