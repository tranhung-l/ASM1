<div class="page-wrapper">
    <h1 class="logo">
        <a href="/" title="Zreview - Review cả thế giới"> Tạp chí review trực tuyến</a>
    </h1>
    <nav class="category-menu">
        <ul>
            @foreach (DB::table('loaitin')->where('AnHien', 1)->orderBy('ThuTu', 'asc')->get() as $loaitin)
                <li class="parent xuat-ban ">
                    <a class="nav-link" href="/cat/{{ $loaitin->id }}">{{ $loaitin->TenLT }}</a>
                    <div class="subcate">
                        <ul>
                        </ul>
                    </div>
                </li>
            @endforeach
            <nav class="navbar navbar-light bg-light">
                <div class="container-fluid">
                    <form class="d-flex" action="{{ route('search') }}" method="GET">
                        <input class="form-control me-2" type="search" name="query" placeholder="Tìm kiếm theo tiêu đề" aria-label="Search" required>
                        <button class="btn btn-outline-success" type="submit">Tìm kiếm</button>
                    </form>
                </div>
            </nav>
        </ul>
    </nav>
   
</div>
