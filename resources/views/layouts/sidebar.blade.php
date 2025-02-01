<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/{{auth()->user()->role}}/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Perpustakaan</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{Route::is('dashboard.index') ? 'active' : ''}}">
        <a class="nav-link" href="/{{auth()->user()->role}}/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    @if(auth()->user()->role == 'admin')
    <!-- Divider -->
    <hr class="sidebar-divider">
    
    <!-- Heading -->
    <div class="sidebar-heading text-muted">
        Data Master
    </div>

    <!-- Nav Item - Data Buku -->
    <li class="nav-item 
    {{Route::is('rak.index') || Route::is('ddc.index') || Route::is('format.index') || Route::is('penerbit.index') || Route::is('pengarang.index') || Route::is('pustaka.index') ? 'active' : ''}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBuku"
            aria-expanded="false" aria-controls="collapseBuku">
            <i class="fas fa-book-open"></i>
            <span>Data Buku</span>
        </a>
        <div id="collapseBuku" class="collapse {{Route::is('rak.index') || Route::is('ddc.index') || Route::is('format.index') || Route::is('penerbit.index') || Route::is('pengarang.index') || Route::is('pustaka.index') ? 'show' : ''}}" 
            aria-labelledby="headingBuku" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header text-muted">Manajemen Buku:</h6>
                <a class="collapse-item {{Route::is('rak.index') ? 'active text-warning' : ''}}" href="/{{auth()->user()->role}}/rak">Rak</a>
                <a class="collapse-item {{Route::is('ddc.index') ? 'active text-warning' : ''}}" href="/{{auth()->user()->role}}/ddc">DDC</a>
                <a class="collapse-item {{Route::is('format.index') ? 'active text-warning' : ''}}" href="/{{auth()->user()->role}}/format">Format</a>
                <a class="collapse-item {{Route::is('penerbit.index') ? 'active text-warning' : ''}}" href="/{{auth()->user()->role}}/penerbit">Penerbit</a>
                <a class="collapse-item {{Route::is('pengarang.index') ? 'active text-warning' : ''}}" href="/{{auth()->user()->role}}/pengarang">Pengarang</a>
                <a class="collapse-item {{Route::is('pustaka.index') ? 'active text-warning' : ''}}" href="/{{auth()->user()->role}}/pustaka">Pustaka</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Data Anggota -->
    <li class="nav-item 
    {{Route::is('jenis-anggota.index') || Route::is('anggota.index') ? 'active' : ''}}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAnggota"
            aria-expanded="false" aria-controls="collapseAnggota">
            <i class="fas fa-users"></i>
            <span>Data Anggota</span>
        </a>
        <div id="collapseAnggota" class="collapse {{Route::is('jenis-anggota.index') || Route::is('anggota.index') ? 'show' : ''}}" 
            aria-labelledby="headingAnggota" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header text-muted">Manajemen Anggota:</h6>
                <a class="collapse-item {{Route::is('jenis-anggota.index') ? 'active text-warning' : ''}}" href="/{{auth()->user()->role}}/jenis-anggota">Jenis</a>
                <a class="collapse-item {{Route::is('anggota.index') ? 'active text-warning' : ''}}" href="/{{auth()->user()->role}}/anggota">Anggota</a>
            </div>
        </div>
    </li>
    
    <!-- Divider -->
    <hr class="sidebar-divider my-0">
    
    <li class="nav-item {{Route::is('transaksi.index') ? 'active' : ''}}">
        <a class="nav-link" href="/{{auth()->user()->role}}/transaksi">
            <i class="fas fa-fw fa-shopping-cart"></i>
            <span>Transaksi</span>
        </a>
    </li>
    
    <hr class="sidebar-divider my-0">
    
    <li class="nav-item {{Route::is('laporan.index') ? 'active' : ''}}">
        <a class="nav-link" href="/{{auth()->user()->role}}/laporan">
            <i class="fas fa-fw fa-file"></i>
            <span>Laporan</span>
        </a>
    </li>
    
    @endif
    @if(auth()->user()->role == 'anggota')
    <hr class="sidebar-divider my-0">
    
    <li class="nav-item {{Route::is('request.index') ? 'active' : ''}}">
        <a class="nav-link" href="/{{auth()->user()->role}}/request">
            <i class="fas fa-question-circle"></i>
            <span>Request</span>
        </a>
    </li>

    <hr class="sidebar-divider my-0">
    
    <li class="nav-item {{Request::is(auth()->user()->role . '/profile*') ? 'active' : ''}}">
        <a class="nav-link" href="/{{auth()->user()->role}}/profile">
            <i class="fas fa-user"></i>
            <span>Profile</span>
        </a>
    </li>
    @endif
    
    <hr class="sidebar-divider my-0">
    
    <li class="nav-item {{Request::is(auth()->user()->role . '/perpustakaan*') ? 'active' : ''}}">
        <a class="nav-link" href="/{{auth()->user()->role}}/perpustakaan">
            <i class="fas fa-book-reader"></i>
            <span>Perpustakaan</span>
        </a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>
