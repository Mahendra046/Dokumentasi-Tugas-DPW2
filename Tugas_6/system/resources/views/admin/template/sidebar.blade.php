@php
    function checkRouteActive($route){
    if(Route::current()->uri == $route) return 'active';
    }
@endphp
<div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="{{ url('admin')}}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class=""></i>Amad shop</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{url('public')}}/assets_admin/img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">
                        @if(Auth::check())
                        {{request()->user()->username}}
                        @else
                        Silahkan Login
                        @endif
                        </h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ url('admin/beranda')}}" class="nav-item nav-link {{checkRouteActive('admin/beranda')}}"><i class="fa fa-chart-bar me-2"></i>Beranda</a>
                    <a href="{{ url('admin/produk')}}" class="nav-item nav-link {{checkRouteActive('admin/produk')}}"><i class="fa fa-cubes me-2"></i>Produk</a>
                    <a href="{{ url('admin/kategori')}}" class="nav-item nav-link {{checkRouteActive('admin/kategori')}}"><i class="fa fa-th me-2"></i>Kategori</a>
                    <a href="{{ url('admin/user')}}" class="nav-item nav-link {{checkRouteActive('admin/user')}}"><i class="fa fa-tags me-2"></i>User</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{checkRouteActive('admin/pelanggan')}} {{checkRouteActive('admin/supplier')}}" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Master Data</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ url('admin/pelanggan')}}" class="dropdown-item">Pelanggan</a>
                            <a href="{{ url('admin/supplier')}}" class="dropdown-item">Supplier</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>