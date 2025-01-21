<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('dashboard.index')}}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Perpustakaan</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{Route::is('dashboard.index') ? 'active' : ''}} ">
        <a class="nav-link" href="{{route('dashboard.index')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Master
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item 
    {{Route::is('rak.index') ? 'active' : ''}}
    {{Route::is('ddc.index') ? 'active' : ''}}
    {{Route::is('format.index') ? 'active' : ''}}
    {{Route::is('penerbit.index') ? 'active' : ''}}
    {{Route::is('pengarang.index') ? 'active' : ''}}
    {{Route::is('pustaka.index') ? 'active' : ''}}
    ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
            aria-controls="collapseTwo">
            <i class="fas fa-book-open"></i>
            <span>Data Buku</span>
        </a>
        <div id="collapseTwo" class="collapse
        {{Route::is('rak.index') ? 'show' : ''}}
        {{Route::is('ddc.index') ? 'show' : ''}}
        {{Route::is('format.index') ? 'show' : ''}}
        {{Route::is('penerbit.index') ? 'show' : ''}}
        {{Route::is('pengarang.index') ? 'show' : ''}}
        {{Route::is('pustaka.index') ? 'show' : ''}}
        " 
        aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manajemen Buku:</h6>
                <a class="collapse-item {{Route::is('rak.index') ? 'active text-warning' : ''}}" href="{{route('rak.index')}}">Rak</a>
                <a class="collapse-item {{Route::is('ddc.index') ? 'active text-warning' : ''}}" href="{{route('ddc.index')}}">DDC</a>
                <a class="collapse-item {{Route::is('format.index') ? 'active text-warning' : ''}}" href="{{route('format.index')}}">Format</a>
                <a class="collapse-item {{Route::is('penerbit.index') ? 'active text-warning' : ''}}" href="{{route('penerbit.index')}}">Penerbit</a>
                <a class="collapse-item {{Route::is('pengarang.index') ? 'active text-warning' : ''}}" href="{{route('pengarang.index')}}">Pengarang</a>
                <a class="collapse-item {{Route::is('pustaka.index') ? 'active text-warning' : ''}}" href="{{route('pustaka.index')}}">Pustaka</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item 
    {{Route::is('jenis-anggota.index') ? 'active' : ''}}
    {{Route::is('anggota.index') ? 'active' : ''}}
    ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-users"></i>
            <span>Data Anggota</span>
        </a>
        <div id="collapseUtilities" class="collapse
        {{Route::is('jenis-anggota.index') ? 'show' : ''}}
        {{Route::is('anggota.index') ? 'show' : ''}}
        " aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Manajemen Anggota:</h6>
                <a class="collapse-item {{Route::is('jenis-anggota.index') ? 'active text-warning' : ''}}" href="{{route('jenis-anggota.index')}}">Jenis</a>
                <a class="collapse-item {{Route::is('anggota.index') ? 'active text-warning' : ''}}" href="{{route('anggota.index')}}">Anggota</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>