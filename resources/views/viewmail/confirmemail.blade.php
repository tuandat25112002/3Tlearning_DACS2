 @extends('confirmemail')
 @section('content')
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
      @if (session('status'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('status') }}
                        </div>
      @endif
      <?php
        Session::put('status', null);
        ?>
      <h3 class="signin-text mb-3"> Xác nhận email</h3>
      <form method="POST" action="{{URL::to('/confirmcode')}}">
        @csrf

        <div class="form-group mb-3">
          <label for="email">Nhập mã xác nhận : </label>

          <input type="text" placeholder="* * * * * *" required name="maxacnhan" id="maxacnhan"  class="form-control">
        </div>


     <!--    <div class="w-100">
          <button class="btn btn-class float-left">Đăng nhập</button>
          </div>
 -->
            <input type="submit" value="Xác nhận mã" class=" w-100 btn btn-xacnhan">
      </form>
            <center> <p><a href="" >Gửi lại mã</a></p></center>

@endsection
