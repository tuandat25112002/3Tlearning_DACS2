@extends('dashboard')

@section('admin_content')
<style type="text/css">
        td.mota{
             max-width: 100px;
             overflow: hidden;
             text-overflow: ellipsis;
             white-space: nowrap;
          }
        td.image{
            width: 150px;
        }
    </style>
{{-- @include('layouts.nav') --}}
{{-- <div class="container">
    <div class="row justify-content-center"> --}}
        <section id="main-content">
        <section class="wrapper ">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Liệt kê khóa học</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div id="khoahoc_data">
                        @include('admincp.sanpham.pagination')
                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    $(document).ready(function(){
                       $(document).on('click', '.page-item a', function(event) {
                           event.preventDefault();
                           var page = $(this).attr('href').split('page=')[1];
                           // alert(page);

                           fetch_data(page);

                       });
                       function fetch_data(page){
                            $.ajax({
                                url:"{{URL::to('/pagination/fetch_data')}}",
                                data:"page="+page,
                                success:function(data)
                                {
                                    // alert(page);
                                    $('#khoahoc_data').html(data);
                                }
                            });


                       }
                    });
                </script>
                <script type="text/javascript">
                    $('.khoahocnoibat').change(function(event) {
                        const khoahocnoibat = $(this).val();
                        const khoahoc_id = $(this).data('khoahoc-id');
                        var _token = $('input[name="_token"]').val();
                        const tenkhoahoc= $(this).data('tenkhoahoc');
                        // alert(_token)
                        $.ajax({
                            url: "{{url('/khoahocnoibat')}}",
                            method:"POST",
                            data:{khoahocnoibat:khoahocnoibat,khoahoc_id:khoahoc_id, _token:_token},
                            success:function(data){
                                alert('Đã thay đổi mục hiển thị của '+tenkhoahoc);
                            }
                        });
                    });
                </script>
            </section>
        </section>

                @endsection
