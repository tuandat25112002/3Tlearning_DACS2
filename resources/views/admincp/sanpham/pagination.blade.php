     <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Tên khóa học</th>
                          <th scope="col">Ảnh</th>
                          <th scope="col">Slug khóa học</th>
                          <th scope="col">Học phí</th>
                          <th scope="col">Giảm giá</th>
                          <th scope="col">Mô tả khóa học</th>

                          <th scope="col">Danh mục</th>
                          <th scope="col">Giáo viên</th>
                          <th scope="col">Lượt xem</th>
                          <th scope="col">Nổi bật</th>
                          <th scope="col">Kích hoạt</th>
                          <th scope="col">Quản lý</th>
                        </tr>
                      </thead>
                      <tbody>
                         @foreach($sanpham as $key => $list)
                        <tr>
                          <th scope="row">{{$key+1}}</th>
                          <td>{{$list->tensanpham}}</td>
                          <td class="image"><img width="100%" src="{{asset('public/upload/sanpham/'.$list->hinhanh)}}"></td>
                           <td>{{$list->slug_sanpham}}</td>
                           <td ><span class="money">{{$list->price}}</span> VND</td>
                           <td>{{$list->discount}}%</td>
                          <td class="mota">{{$list->motasanpham}}</td>
                          <td>
                             {{$list->Danhmuc->tendanhmuc}}
                          </td>
                          <td>
{{--                              @foreach($listgiaovien as $i => $gv) --}}
                            @if($list->GiaoVien->gioitinh==0)
                            Thầy
                            @else
                            Cô
                            @endif
                              {{$list->GiaoVien->hodem}} {{$list->GiaoVien->ten}}
                           {{--  @endforeach --}}
                        </td>
                        <td>
                            {{$list->luotxem}}
                        </td>
                        <td style="width: 15%;">
                            <form>
                            @csrf
                            <select data-tenkhoahoc="{{$list->tensanpham}}" data-khoahoc-id="{{$list->sanpham_id}}" name="noibat" class="form-control khoahocnoibat">
                                @foreach($noibats as $noibat)
                                @if($list->idnoibat==$noibat->id)
                                <option selected value="{{$noibat->id}}">{{$noibat->tennoibat}}</option>
                                @else
                                <option value="{{$noibat->id}}">{{$noibat->tennoibat}}</option>
                                @endif
                                @endforeach
                            </select>
                            </form>
                        </td>
                          <td>
                              @if($list->kichhoat==0)
                                <span class="text text-success text-center">Kích hoạt</span>
                              @else
                                <span class="text text-success text-danger">Không kích hoạt</span>
                              @endif
                          </td>
                          <td>
                                <a href="{{route('sanpham.edit',[$list->sanpham_id])}}" class="btn btn-primary">Sửa</a>
                              <form action="{{route('sanpham.destroy',[$list->sanpham_id])}}" method="POST">
                                  @method('DELETE')
                                  @csrf
                                  <button onclick ="return confirm('Bạn có muốn chắc xóa khóa học này?');" class="btn btn-danger">Delete</button>
                              </form>
                          </td>

                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                     <div class=w-100>
                                <div class="float-right">
                                    {{ $sanpham->links() }}
                                </div>
                            </div>
                    </div>
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
