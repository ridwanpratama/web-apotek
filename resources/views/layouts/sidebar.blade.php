<div class="main-sidebar">
    <aside id="sidebar-wrapper">
      <div class="sidebar-brand">
        <a href="#">Apotek</a>
      </div>
      <div class="sidebar-brand sidebar-brand-sm">
        <a href="#">Apotek</a>
      </div>
      <ul class="sidebar-menu">

          <li class="menu-header">Dashboard</li>
          <li class="nav-item dropdown">
            <a href="{{ route('dashboard') }}" class="nav-link ">
              <i class="fas fa-fire"></i>
              <span>Dashboard</span>
            </a>
          </li>

            <li class="menu-header">Data Master</li>
            @if (auth()->user()->level=="manager")
            <li class="nav-item dropdown {{ Request::is('user', 'create_user') ? 'sidebar-item active' : '' }}">
              <a href="{{ route('user') }}" class="nav-link">
                <i class="fas fa-columns"></i> 
                <span>Data User</span>
              </a>
            </li>
            @endif

            @if (auth()->user()->level=="admin")
            <li class="nav-item dropdown {{ Request::is('obat', 'create_obat') ? 'sidebar-item active' : '' }}">
              <a class="nav-link" href="{{ route('obat') }}">
                <i class="far fa-square"></i> 
                <span>Data Obat</span>
              </a>
            </li>
            @endif
          
          @if (auth()->user()->level=="admin")
          <li class="nav-item dropdown {{ Request::is('pemasok', 'create_pemasok') ? 'sidebar-item active' : '' }}">
            <a href="{{ route('pemasok') }}" class="nav-link">
              <i class="fas fa-ellipsis-h"></i> 
              <span>Data Pemasok</span>
            </a>
          </li>
          @endif
          
          @if (auth()->user()->level=="kasir")
          <li class="nav-item dropdown">
            <a href="{{ route('transaksi') }}" class="nav-link">
              <i class="fas fa-pencil-ruler"></i> 
              <span>Transaksi</span>
            </a>
          </li>
          @endif

          @if (auth()->user()->level=="manager")
          <li class="nav-item dropdown">
            <a href="#" class="nav-link">
              <i class="far fa-file-alt"></i>
              <span>Laporan</span>
            </a>
          </li>
          @endif

        </ul>
    </aside>
  </div>
