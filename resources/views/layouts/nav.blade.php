 <div class="container-fluid" style="padding: 0px;margin-bottom: 20px;">
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
             {{--      <a class="navbar-brand" href="#">Navbar</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button> --}}

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="{{route('home')}}">Admin <span class="sr-only">(current)</span></a>
                      </li>

                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Quản lý môn học
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('danhmuc.index')}}">Danh sách môn học</a>
                          <a class="dropdown-item" href="{{route('danhmuc.create')}}">Thêm môn học</a>



                        </div>

                      </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Quản lý khóa học
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{route('sanpham.index')}}">Danh sách khóa học</a>
                          <a class="dropdown-item" href="{{route('sanpham.create')}}">Thêm khóa học</a>


                        </div>

                      </li>
                           <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Quản lý bài học
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{route('baihoc.index')}}">Danh sách Bài học</a>
                          <a class="dropdown-item" href="{{route('baihoc.create')}}">Thêm Bài học</a>


                        </div>

                      </li>
                       <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Quản lý Giáo Viên
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{route('giaovien.index')}}">Danh sách Giáo viên</a>
                          <a class="dropdown-item" href="{{route('giaovien.create')}}">Thêm Giáo viên</a>


                        </div>

                      </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                    </form>
                  </div>
                </nav>
</div>
