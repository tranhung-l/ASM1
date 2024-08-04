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
            @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                @auth
                @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        </ul>
        
    </nav>
   
</div>
