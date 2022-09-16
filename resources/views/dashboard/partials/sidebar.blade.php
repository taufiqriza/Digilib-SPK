<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('home')}}">
      <div class="sidebar-brand-icon">
        <i class="fas fa-chart-line"></i>
      </div>
      <div class="sidebar-brand-text mx-3">U-Digilib <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{\Route::current()->getName()=='home' ? 'active' : ''}}">
      <a class="nav-link" href="{{route('home')}}">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <li class="nav-item {{\Route::current()->getName()=='criteria' ? 'active' : ''}}">
    <a class="nav-link " href="{{route('criteria')}}">
        <i class="fas fa-tasks"></i>
        <span>Kriteria</span></a>
    </li>
    

    <li class="nav-item {{\Route::current()->getName()=='employe' ? 'active' : ''}}">
      <a class="nav-link" href="{{route('employe')}}">
        <i class="fas fa-fw fa-book"></i>

        <span>E-DDC List</span></a>
    </li>
    

    <li class="nav-item {{\Route::current()->getName()=='assessment' ? 'active' : ''}}">
      <a class="nav-link" href="{{route('assessment')}}">
        <i class="fas fa-drafting-compass"></i>
        <span>Penilaian</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="fas fa-swatchbook"></i>
        <span>E-Books</span> </span>
            <span class="sidebar-badge badge badge-warning">Proses</span></a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="">
        <i class="fas fa-hdd"></i>
        <span>Audit Katalog</span> </span>
            <span class="sidebar-badge badge badge-warning">Proses</span></a>
    </li>
    <hr class="sidebar-divider my-0">

    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-fw  fa-sign-out-alt"></i>
        <span>Keluar</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block"> 

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>