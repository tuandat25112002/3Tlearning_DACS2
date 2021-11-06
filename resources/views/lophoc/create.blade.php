@extends('dashboard')
@section('admin_content')
<section id="main-content">
    <section class="wrapper">
        <div class="form-w3layouts">
            <!-- page start-->

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            THÊM LỚP HỌC
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                                <a class="fa fa-cog" href="javascript:;"></a>
                                <a class="fa fa-times" href="javascript:;"></a>
                             </span>
                        </header>
                              @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                @endif
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="panel-body">
                            <div class="form">
                                <form class="cmxform form-horizontal " id="signupForm" method="POST" action="{{route('lophoc.store')}}" novalidate="novalidate">
                                     @csrf
                                    <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Lớp: </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="firstname" name="nameclass" type="text">
                                        </div>
                                    </div>
                                      <div class="form-group ">
                                        <label for="firstname" class="control-label col-lg-3">Số lượng: </label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="firstname" name="soluong" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                      <button class="btn btn-primary" type="submit">Thêm</button>
                                            <a href="{{route('lophoc.index')}}" class="btn btn-default" type="button">Xem danh sách</a>
                                        </div>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>

        </div>
</section>
@endsection
