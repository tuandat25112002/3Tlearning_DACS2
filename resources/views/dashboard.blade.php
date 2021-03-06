<?php
  $admin_name = Session::get('admin_name');
  if($admin_name==null || $admin_name==""){
    header("location:admin");

    die;
 }

?>


<!DOCTYPE html>
<head>
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="//code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
<script type="text/javascript" src="{{asset('js/app.js')}}"></script>
 --}}
<link href="{{asset('public/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('public/css/styleresponsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/css/font.css')}}" type="text/css"/>
<link href="{{asset('public/css/font-awesome.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('public/css/morris.css')}}" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="{{asset('css/monthly.css')}}">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="{{asset('public/js/jquery2.0.3.min.js')}}"></script>
<script src="{{asset('public/js/raphael-min.js')}}"></script>
<script src="{{asset('public/js/morris.js')}}"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('public/js/simple.money.format.js')}}"></script>
</head>
<body >
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">
    <a href="{{asset('/dashboard')}}" class="logo">
        Dashboard
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->
<div class="nav notify-row" id="top_menu">
    <!--  notification start -->
    <ul class="nav top-menu">
        <!-- settings start -->
        <li class="dropdown">
            <a data-toggle="dropdown"  href="#">
                <i class="fa fa-tasks"></i>
                <span class="badge bg-success">8</span>
            </a>
            <ul class="dropdown-menu extended tasks-bar">
                <li>
                    <p class="">You have 8 pending tasks</p>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>25% , Deadline  12 June???13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="45">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Product Delivery</h5>
                                <p>45% , Deadline  12 June???13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="78">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Payment collection</h5>
                                <p>87% , Deadline  12 June???13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="60">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="task-info clearfix">
                            <div class="desc pull-left">
                                <h5>Target Sell</h5>
                                <p>33% , Deadline  12 June???13</p>
                            </div>
                                    <span class="notification-pie-chart pull-right" data-percent="90">
                            <span class="percent"></span>
                            </span>
                        </div>
                    </a>
                </li>

                <li class="external">
                    <a href="#">See All Tasks</a>
                </li>
            </ul>
        </li>
        <!-- settings end -->
        <!-- inbox dropdown start-->
        <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown"  href="#">
                <i class="fa fa-envelope-o"></i>
                <span class="badge bg-important">4</span>
            </a>
            <ul class="dropdown-menu extended inbox">
                <li>
                    <p class="red">You have 4 Mails</p>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                <span class="subject">
                                <span class="from">Jonathan Smith</span>
                                <span class="time">Just now</span>
                                </span>
                                <span class="message">
                                    Hello, this is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="{{asset('public/images/1.png')}}"></span>
                                <span class="subject">
                                <span class="from">Jane Doe</span>
                                <span class="time">2 min ago</span>
                                </span>
                                <span class="message">
                                    Nice admin template
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/3.png"></span>
                                <span class="subject">
                                <span class="from">Tasi sam</span>
                                <span class="time">2 days ago</span>
                                </span>
                                <span class="message">
                                    This is an example msg.
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="photo"><img alt="avatar" src="images/2.png"></span>
                                <span class="subject">
                                <span class="from">Mr. Perfect</span>
                                <span class="time">2 hour ago</span>
                                </span>
                                <span class="message">
                                    Hi there, its a test
                                </span>
                    </a>
                </li>
                <li>
                    <a href="#">See all messages</a>
                </li>
            </ul>
        </li>
        <!-- inbox dropdown end -->
        <!-- notification dropdown start-->
        <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown"  href="#">

                <i class="fa fa-bell-o"></i>
                <span class="badge bg-warning">3</span>
            </a>
            <ul class="dropdown-menu extended notification">
                <li>
                    <p>Notifications</p>
                </li>
                <li>
                    <div class="alert alert-info clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #1 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-danger clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #2 overloaded.</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="alert alert-success clearfix">
                        <span class="alert-icon"><i class="fa fa-bolt"></i></span>
                        <div class="noti-info">
                            <a href="#"> Server #3 overloaded.</a>
                        </div>
                    </div>
                </li>

            </ul>
        </li>
        <!-- notification dropdown end -->
    </ul>
    <!--  notification end -->
</div>
<div class="top-nav clearfix">
    <!--search & user info start-->
    <ul class="nav pull-right top-menu">
        <li>
            <input type="text" class="form-control search" placeholder=" Search">
        </li>
        <!-- user login dropdown start-->
        <li class="dropdown">
            <a data-toggle="dropdown"  href="#">
                <img alt="" src="{{asset('public/images/2.png')}}">
                <span class="username">
                  <?php
                    $admin_name = Session::get('admin_name');
                    if(isset($admin_name)){
                        echo $admin_name;

                    }

                    ?>
                </span>
                <b class="caret"></b>
            </a>
            <ul class="dropdown-menu extended logout">
                <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="{{URL::to('/logout')}}"><i class="fa fa-key"></i> ????ng xu???t</a></li>
            </ul>
        </li>
        <!-- user login dropdown end -->

    </ul>
    <!--search & user info end-->
</div>
</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a  href="{{URL::to('/dashboard')}}">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a class="" href="{{URL::to('/thongke')}}">
                        <i class="fa fa-bar-chart"></i>
                        <span>Th???ng k??</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a  href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Danh m???c m??n h???c</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('danhmuc.index')}}">Danh s??ch m??n h???c</a></li>
                        <li><a href="{{route('danhmuc.create')}}">Th??m m??n h???c</a></li>

                    </ul>
                </li>
                  <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-group"></i>
                        <span>Qu???n l?? gi??o vi??n</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('giaovien.index')}}">Danh s??ch gi??o vi??n</a></li>
                        <li><a href="{{route('giaovien.create')}}">Th??m gi??o vi??n</a></li>

                    </ul>
                </li>
                  <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-stack-overflow"></i>
                        <span>Qu???n l?? kh??a h???c</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('sanpham.index')}}">Danh s??ch kh??a h???c</a></li>
                        <li><a href="{{route('sanpham.create')}}">Th??m kh??a h???c</a></li>

                    </ul>
                </li>
                  <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-calendar-o"></i>
                        <span>Qu???n l?? b??i h???c</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('baihoc.index')}}">Danh s??ch b??i h???c</a></li>
                        <li><a href="{{route('baihoc.create')}}">Th??m b??i h???c</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-group"></i>
                        <span>T??i li???u h???c t???p</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('tailieu.index')}}">Danh s??ch t??i li???u</a></li>
                        <li><a href="{{route('tailieu.create')}}">Th??m t??i li???u</a></li>

                    </ul>

                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-file-text-o"></i>
                        <span>Qu???n l?? b??i vi???t</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('baihoc.index')}}">B??i vi???t</a></li>
                        <li><a href="{{route('baihoc.create')}}">Th??m b??i vi???t</a></li>

                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-list-alt"></i>
                        <span>Tin t???c</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('baihoc.index')}}">Danh s??ch tin t???c</a></li>
                        <li><a href="{{route('baihoc.create')}}">????ng tin t???c</a></li>

                    </ul>
                         <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Qu???n l?? l???p h???c</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('lophoc.index')}}">Danh s??ch l???p h???c</a></li>
                        <li><a href="{{route('lophoc.create')}}">Th??m l???p</a></li>

                    </ul>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Qu???n l?? sinh vi??n</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{route('sinhvien.index')}}">Sinh vi??n</a></li>
                        <li><a href="{{route('sinhvien.create')}}">Th??m sinh vi??n</a></li>

                    </ul>
                </li>
                </li>
                   <li>
                    <a class="" href="{{URL::to('/thongke')}}">

                        <span>Error 404</span>
                    </a>
                </li>
            </ul>
     </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
    @yield('admin_content');

</section>
<!--main content end-->
</section>
<script src="{{asset('public/js/bootstrap.js')}}"></script>
<script src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/js/scripts.js')}}"></script>
<script src="{{asset('public/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('public/js/jquery.scrollTo.js')}}"></script>
  <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('noidung_baihoc');
    </script>
     <script type="text/javascript">

    function ChangeToSlug()
        {
            var slug;

            //L???y text t??? th??? input title
            slug = document.getElementById("slug").value;
            slug = slug.toLowerCase();
            //?????i k?? t??? c?? d???u th??nh kh??ng d???u
                slug = slug.replace(/??|??|???|???|??|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'a');
                slug = slug.replace(/??|??|???|???|???|??|???|???|???|???|???/gi, 'e');
                slug = slug.replace(/i|??|??|???|??|???/gi, 'i');
                slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???|??|???|???|???|???|???/gi, 'o');
                slug = slug.replace(/??|??|???|??|???|??|???|???|???|???|???/gi, 'u');
                slug = slug.replace(/??|???|???|???|???/gi, 'y');
                slug = slug.replace(/??/gi, 'd');
                //X??a c??c k?? t??? ?????t bi???t
                slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
                //?????i kho???ng tr???ng th??nh k?? t??? g???ch ngang
                slug = slug.replace(/ /gi, "-");
                //?????i nhi???u k?? t??? g???ch ngang li??n ti???p th??nh 1 k?? t??? g???ch ngang
                //Ph??ng tr?????ng h???p ng?????i nh???p v??o qu?? nhi???u k?? t??? tr???ng
                slug = slug.replace(/\-\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-\-/gi, '-');
                slug = slug.replace(/\-\-\-/gi, '-');
                slug = slug.replace(/\-\-/gi, '-');
                //X??a c??c k?? t??? g???ch ngang ??? ?????u v?? cu???i
                slug = '@' + slug + '@';
                slug = slug.replace(/\@\-|\-\@|\@/gi, '');
                //In slug ra textbox c?? id ???slug???
            document.getElementById('convert_slug').value = slug;
        }
</script>
<!-- morris JavaScript -->
<script>
    $(document).ready(function() {
        //BOX BUTTON SHOW AND CLOSE
       jQuery('.small-graph-box').hover(function() {
          jQuery(this).find('.box-button').fadeIn('fast');
       }, function() {
          jQuery(this).find('.box-button').fadeOut('fast');
       });
       jQuery('.small-graph-box .box-close').click(function() {
          jQuery(this).closest('.small-graph-box').fadeOut(200);
          return false;
       });

        //CHARTS
        function gd(year, day, month) {
            return new Date(year, month - 1, day).getTime();
        }

        graphArea2 = Morris.Area({
            element: 'hero-area',
            padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
            data: [
                {period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
                {period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
                {period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
                {period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
                {period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
                {period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
                {period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
                {period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
                {period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},

            ],
            lineColors:['#eb6f6f','#926383','#eb6f6f'],
            xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
            pointSize: 2,
            hideHover: 'auto',
            resize: true
        });


    });
    </script>
<!-- calendar -->
    <script type="text/javascript" src="{{asset('public/js/monthly.js')}}"></script>
    <script type="text/javascript">
        $(window).load( function() {

            $('#mycalendar').monthly({
                mode: 'event',

            });

            $('#mycalendar2').monthly({
                mode: 'picker',
                target: '#mytarget',
                setWidth: '250px',
                startHidden: true,
                showTrigger: '#mytarget',
                stylePast: true,
                disablePast: true
            });

        switch(window.location.protocol) {
        case 'http:':
        case 'https:':
        // running on a server, should be good.
        break;
        case 'file:':
        alert('Just a heads-up, events will not work when run locally.');
        }

        });
    </script>
    <script type="text/javascript">
    $('.money').simpleMoneyFormat();
</script>
    <!-- //calendar -->
</body>
</html>
