@extends('../layout')
@section('content')
<style type="text/css">

</style>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{URL::to('/home')}}">Trang Chủ</a></li>
    <li class="breadcrumb-item"><a href="{{URL::to('/khoahoc')}}">Khóa học</a></li>


  </ol>
</nav>
<div class="container mt-4 mb-4">
      @include('pages.element.sidebarkhoahoc')
    </div>
 <div class="col-md-9 ">

      <div class="h3">LỌC KHÓA HỌC</div>
      @if(!isset($errors) || sizeof($errors)==0)
     <h5>Các khóa học từ <b><span class="money-format">{{$min}}</span> VNĐ</b> đến <b><span class="money-format">{{$max}}</span> VNĐ</b></h5>
     @else
     <h5 class="text-danger">{{$errors}}</h5>
     @endif
     <p>Kết quả lọc: {{sizeof($khoahocduocloc)}} kết quả</p>
     <form>
      @csrf
     <select name="hienthi" class="form-control tanggiam col-md-4">
         <option value="desc">Học phí từ Cao -> Thấp</option>
       <option value="asc">Học phí từ Thấp -> Cao</option>

     </select>
   </form>
<div class="mt-2">
  <div id="lockhoahoc">


        @include('pages.pagination.lockhoahoc')

  </div>

</div>




</div>
</div>
</div>
{{-- ajax pagination --}}


{{-- end ajax pagination --}}
    <script type="text/javascript">
                  $('.money-format').simpleMoneyFormat();
                </script>
 <script type="text/javascript">
      $('.tanggiam').change(function(event) {
          const hienthi = $(this).val();
          var _token = $('input[name="_token"]').val();
          var maxprice = $('#maxprice').val();
          var minprice = $('#minprice').val();


          $.ajax({
            url:"{{URL::to('/lockhoahoc/hien-thi')}}",
            method:"get",
            data: {hienthi:hienthi,maxprice:maxprice,minprice:minprice,_token:_token},
             success:function(data){
                $('#lockhoahoc').html(data);
             }
          });

      });
 </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

  <script type="text/javascript">
        $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,

    nav:true,
    center:false,
    autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },

        380:{
            center:true,
            items:2
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
});
        $('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[1000])
})
$('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
})

    </script>
@endsection
