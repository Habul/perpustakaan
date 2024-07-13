 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="{{ url('dashboard') }}" class="brand-link">
         <img src="{{ asset('image/favicon.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
         <span class="brand-text font-weight-light">{{ 'Perpustakaan' }}</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="{{ asset('image/user.png') }}" sizes="16x16" class="img-circle elevation-2"
                     alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">{{ auth()->user()->name }}</a>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar nav-child-indent flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item">
                     <a href="/dashboard" class="nav-link @yield('active-dashboard')">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>
                 {{-- @role('admin')
                     <li class="nav-header">ADMIN</li>

                     <li class="nav-item">
                         <a href="/user" class="nav-link @yield('active-user')">
                             <i class="nav-icon fas fa-users"></i>
                             <p>
                                 User
                             </p>
                         </a>
                     </li>
                 @endrole --}}

                 <li class="nav-header">MASTER</li>

                 <li class="nav-item @yield('menu-open-data-master')">
                     <a href="#" class="nav-link @yield('active-data-master')">
                         <i class="nav-icon fas fa-copy"></i>
                         <p>
                             Data Master
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="/kategori" class="nav-link  @yield('active-kategori')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Kategori</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="/rak" class="nav-link  @yield('active-rak')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Rak</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="/penerbit" class="nav-link  @yield('active-penerbit')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Penerbit</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="/buku" class="nav-link  @yield('active-buku')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Buku</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="/datasiswa" class="nav-link @yield('active-datasiswa')">
                         <i class="nav-icon fas fa-user-friends"></i>
                         <p>Data Siswa</p>
                     </a>
                 </li>

                 <li class="nav-item">
                     <a href="/transaksi" class="nav-link @yield('active-transaksi')">
                         <i class="nav-icon fas fa-hands"></i>
                         <p>Transaksi</p>
                     </a>
                 </li>

                 {{-- @role('admin') --}}
                 {{-- <li class="nav-item">
                     <a href="/laporan" class="nav-link @yield('active-laporan')">
                         <i class="nav-icon fas fa-book"></i>
                         <p>Laporan</p>
                     </a>
                 </li> --}}

                 <li class="nav-item @yield('menu-open-data-laporan')">
                     <a href="#" class="nav-link @yield('active-data-laporan')">
                         <i class="nav-icon fas fa-copy"></i>
                         <p>
                             Laporan
                             <i class="fas fa-angle-left right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="/laporanpinjam" class="nav-link @yield('active-laporanpinjam')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Laporan Sedang Dipinjam</p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="/laporan" class="nav-link @yield('active-laporan')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Laporan Selesai Dipinjam</p>
                             </a>
                         </li>

                         <li class="nav-item">
                             <a href="/laporandenda" class="nav-link @yield('active-laporandenda')">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Laporan Yang Didenda</p>
                             </a>
                         </li>
                     </ul>
                 </li>

                 <li class="nav-item">
                     <a href="/chart" class="nav-link @yield('active-chart')">
                         <i class="nav-icon fas fa-chart-bar"></i>
                         <p>Chart</p>
                     </a>
                 </li>
                 {{-- @endrole --}}


                 <li class="nav-item">
                     <a class="nav-link @yield('active-logout')" data-toggle="modal" data-target="#logout-form">
                         <i class="nav-icon fas fa-sign-out-alt"></i>
                         <p>
                             Logout
                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
     </div>
 </aside>
