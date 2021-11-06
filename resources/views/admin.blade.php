
<!DOCTYPE html>
<head>
<title>Trang Admin | 3T Learning</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('public/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('public/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/css/font.css')}}" type="text/css"/>
<link href="{{asset('public/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('public/css/scroll.css')}}" rel="stylesheet">
<!-- //font-awesome icons -->

<script src="js/jquery2.0.3.min.js"></script>
</head>
<body >

<div class="log-w3">
<div class="w3layouts-main">
    <h2>Đăng nhập Admin</h2>
   <div class="text-danger">
    <?php
    $message = Session::get('message');
    if(isset($message)){
        echo $message;
        Session::put('message',null);
    }

    ?>

    </div>
        <form action="{{URL::to('/login_admin')}}" method="post">
            {{csrf_field()}}
            <input type="email" class="ggg" name="admin_email" placeholder="E-MAIL" required="">
            <input type="password" class="ggg" name="admin_password" placeholder="PASSWORD" required="">
            <span><input type="checkbox" />Nhớ mật khẩu</span>
            <h6><a href="#">Quên mật khẩu?</a></h6>
                <div class="clearfix"></div>

                <input type="submit" value="Đăng nhập" name="login">
                 @if (session('status'))
                        <div class="mt-2 text-center text-danger" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
        </form>
        <p><a href="{{URL::to('login-google')}}">Đăng nhập bằng Google</a></p>
        <p>Chưa có tài khoản ?<a href="registration.html">Tạo một tìa khoản mới</a></p>
</div>
</div>
<script src="{{asset('public/js/bootstrap.js')}}"></script>
<script src="{{asset('public/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/js/scripts.js')}}"></script>
<script src="{{asset('public/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('public/js/jquery.scrollTo.js')}}"></script>
</body>
</html>
