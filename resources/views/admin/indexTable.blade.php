  @extends('admin.layouts.masterTable')
  @section('content')
      <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
          <div class="container-fluid py-4">
              <div class="row">
                  <div class="col-12">
                      <div class="card my-4">
                          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                  <h6 class="text-white text-capitalize ps-3">Bảng Tin</h6>
                              </div>
                              <a class="btn btn-primary" href="{{ route('tin.create') }}" role="button">Thêm mới Tin</a>
                          </div>
                          <div class="card-body px-0 pb-2">
                              <div class="table-responsive p-0">
                                  <table class="table align-items-center mb-0">
                                      <thead>
                                          <tr>
                                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                  Tiêu Đề</th>
                                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                  Hình ảnh</th>
                                              <th
                                                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                  Tóm tắt</th>
                                              <th
                                                  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                  Nội Dung</th>
                                              <th
                                                  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                  Lượt xem</th>
                                              <th
                                                  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                  Ngày đăng</th>
                                              <th
                                                  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                  Ngày cập nhật</th>
                                              <th
                                                  class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                  Thao tác</th>
                                              <th class="text-secondary opacity-7"></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($tin as $t)
                                            
                                      
                                          <tr>
                                              <td>
                                                  <p class="text-sm font-weight-bold mb-0">{{ $t->id }}</p>
                                              </td>
                                              <td>
                                                  <p class="text-sm font-weight-bold mb-0">{{ $t->TieuDe }}</p>
                                              </td>
                                              <td>
                                                  <p class="text-sm font-weight-bold mb-0">{{ $t->img }}</p>
                                              </td>
                                              <td>
                                                  <p class="text-sm font-weight-bold mb-0">{{ $t->TomTat }}</p>
                                              </td>
                                              <td>
                                                  <p class="text-sm font-weight-bold mb-0">{{ $t->NoiDung }}</p>
                                              </td>
                                              <td>
                                                  <p class="text-sm font-weight-bold mb-0">{{ $t->luotxem }}</p>
                                              </td>
                                              <td>
                                                  <p class="text-sm font-weight-bold mb-0">{{ $t->created_at }}</p>
                                              </td>
                                              <td>
                                                  <p class="text-sm font-weight-bold mb-0">{{ $t->updated_at }}</p>
                                              </td>
                                              <td class="align-middle">
                                                <button type="button" class="btn btn-outline-danger">Xóa</button>
                                                <button type="button" class="btn btn-outline-warning">Edit</button>
                                              </td>
                                          </tr>
                                          @endforeach

                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12">
                      <div class="card my-4">
                          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                                  <h6 class="text-white text-capitalize ps-3">Bảng Loại tin</h6>
                              </div>
                              <a class="btn btn-primary" href="{{ route('loaitin.create') }}" role="button">Thêm mới loại tin</a>

                          </div>
                          <div class="card-body px-0 pb-2">
                              <div class="table-responsive p-0">
                                  <table class="table align-items-center justify-content-center mb-0">
                                      <thead>
                                          <tr>
                                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                  id</th>

                                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                                  Tên loại tin</th>
                                              <th
                                                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                  Thứ tự</th>
                                              <th
                                                  class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                                  Created_at</th>
                                              <th
                                                  class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                  updated_at</th>
                                              <th
                                                  class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7 ps-2">
                                                  Thao tác</th>
                                              <th></th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                          @foreach ($loaitin as $loai)
                                              <tr>
                                                  <td>
                                                      <p class="text-sm font-weight-bold mb-0">{{ $loai->id }}</p>
                                                  </td>
                                                  <td>
                                                      <p class="text-sm font-weight-bold mb-0">{{ $loai->TenLT }}</p>
                                                  </td>
                                                  <td>
                                                      <p class="text-sm font-weight-bold mb-0">{{ $loai->ThuTu }}</p>
                                                  </td>
                                                  <td>
                                                      <p class="text-sm font-weight-bold mb-0">{{ $loai->created_at }}</p>
                                                  </td>
                                                  <td>
                                                      <p class="text-sm font-weight-bold mb-0">{{ $loai->updated_at }}</p>
                                                  </td>
                                                  <td class="align-middle">
                                                    <form action="{{ route('loaitin.destroy', ['id' => $loaitin->id]) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-outline-danger">Xóa</button>
                                                    </form>
                                                    <a href="{{ route('loaitin.edit', ['id' => $loaitin->id]) }}" type="button" class="btn btn-outline-warning">Edit</a>
                                                </td>
                                              </tr>
                                          @endforeach
                                      </tbody>
                                  </table>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <footer class="footer py-4  ">
                  <div class="container-fluid">
                      <div class="row align-items-center justify-content-lg-between">
                          <div class="col-lg-6 mb-lg-0 mb-4">
                              <div class="copyright text-center text-sm text-muted text-lg-start">
                                  ©
                                  <script>
                                      document.write(new Date().getFullYear())
                                  </script>,
                                  made with <i class="fa fa-heart"></i> by
                                  <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative
                                      Tim</a>
                                  for a better web.
                              </div>
                          </div>
                          <div class="col-lg-6">
                              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                  <li class="nav-item">
                                      <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                          target="_blank">Creative Tim</a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                          target="_blank">About Us</a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                          target="_blank">Blog</a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                          target="_blank">License</a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </footer>
          </div>
      </main>
  @endsection
