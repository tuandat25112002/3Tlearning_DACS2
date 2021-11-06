 @extends('confirmemail')
 @section('content')
<link rel="stylesheet" type="text/css" href="{{asset('public/css/icon.css')}}">
<style type="text/css">

.form-control{
    display: block;
    width:100%;
    font-size: 1rem;
    font-weight: 400;
    line-height:1.5;
    margin-top: 20px;
    border-color: #00ac96 !important;
    border-style: solid !important;
    border-width: 1px 1px 1px 1px !important;
    padding: 20px !important;
    color:#495057;
    text-align: center;
    height: auto;
    border-radius: 40px;
 /*   border-radius: 0;*/
    background-color: #fff;
    background-clip: padding-box;
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
.btn-xacnhan{

    background-color: #00ac96;
    padding: 10px;
    border-radius: 30px;
    text-align: center;
    transition: 0.5s;
    font-size: 15px;
    color: whitesmoke;
}

.btn-xacnhan:hover{
    background-color: #00ac96;
    text-decoration: none;
}



</style>
 <div class="text-center">
        <br><br> <h2 style="color:#0fad00">Success</h2>

        <h3>Đăng ký thành công</h3>
        <p class="text-danger">{{$thongbao}}</p>
        <div class="dummy-positioning d-flex">

          <div class="success-icon">
            <div class="success-icon__tip"></div>
            <div class="success-icon__long"></div>
          </div>

        </div>
        <p style="font-size:20px;color:#5C5C5C;">Cảm ơn bạn đã Đăng ký và ủng hộ 3T Learning. Bây giờ hãy <a href="{{URL::to('/login')}}">Đăng nhập</a> và trải nghiệp nào!</p>
        <a href="{{URL::to('/login')}}" class="btn btn-success">     Đăng nhập ngay      </a>
    <br><br>
        </div>
@endsection
