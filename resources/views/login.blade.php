<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng nhập 3T</title>
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
    padding: 1.5rem 1rem 1rem 1rem;
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

}
.btn-class:hover{
    background-color:  #00ac96;
    color: #fff;
}
/*li.login-facebook{
    background-color: #53a3fa;
    padding: 10px;
    border-radius: 20px;
    text-align: center;
    transition: 0.5s;
}

li.login-facebook:hover{
    background-color: #4a93dd;
}*/
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
</style>
<div class="container">
  <div class="row content" style="border-radius: 20px;">
    <div class="col-md-6">
        <img src="{{asset('public/upload/imagelogin/c39783a3a9906b431e06e684028acd5e.png')}}" style="width: 100%;">
      </div>
    <div class="col-md-5 pt-5 ">
      <h3 class="signin-text mb-3"> Đăng nhập</h3>
      <form method="POST" action="{{URL::to('/login-success')}}">
        @csrf
            @if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        <div class="form-group mb-3">
          <label for="email">Email</label>
          <input type="email" required name="email"  class="form-control">
        </div>
        <div class="form-group mb-3">
          <label for="password">Mật khẩu</label>
          <input type="password" required name="password" class="form-control">
        </div>
        <div class="form-group form-check mb-3">
          <div class="d-flex w-100">
            <div class="col-md-6">
              <input type="checkbox" name="checkbox" class="form-check-input" id="checkbox">
              <label class="form-check-label" for="checkbox">Nhớ mật khẩu</label>
            </div>
            <div class="col-md-6" style="text-align: right;">
              <a class="form-check-label"  href="" >Quên mật khẩu</a>
            </div>
          </div>
        </div>
        <div class="w-100">
          <button class="btn btn-class float-left" type="submit">Đăng nhập</button>
          </div>
          <div class="mt-2">Nếu chưa có tài khoản hãy <a href="{{URL::to('/register')}}">Đăng ký</a></div>
        <div class="row mt-2">
            <ul style="list-style: none;">
          {{--       <li class="login-facebook"><a href=""><i class="fa-brands fa-facebook"></i> Đăng nhập bằng Facebook</a></li> --}}
                <li class="login-gmail mt-2"><a href=""><i class="fa-brands fa-google-plus"></i> Đăng nhập bằng Google</a></li>

            </ul>
        </div>

      </form>
    </div>
  </div>
</div>
</body>
</html>
