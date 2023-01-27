<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            @if (!request()->is('login', 'register', 'password/reset'))
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            Kategori
                        </a>
                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown"
                            style="cursor: pointer">
                            <a class="dropdown-item" wire:click="semuaKategori">Semua Kategori</a>
                            <div class="dropdown-divider"></div>
                            @foreach ($kategori as $item)
                                <a class="dropdown-item"
                                    wire:click="pilihKategori({{ $item->id }})">{{ $item->nama }}</a>
                            @endforeach
                        </div>
                    </li>
                </ul>
            @endif

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link @yield('menu-login-active')" href="{{ route('login') }}">{{ __('Login') }}
                                <i class="fas fa-sign-in-alt"></i></a>
                        </li>
                    @endif
                @else
                    @if ($count > 0)
                        <li class="nav-item">
                            <a class="nav-link" href="/keranjang">Keranjang <span
                                    class="badge badge-primary">{{ $count }}</span></a>
                        </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            @role('admin|petugas')
                                <a class="dropdown-item" href="{{ url('dashboard') }}">
                                    <i class="nav-icon fas fa-tachometer-alt"></i> Dashboard</a>
                            @endrole
                            <a class="dropdown-item"" data-toggle="modal" data-target="#logout-form" role="button">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

<div class="modal fade" id="logout-form" tabindex="-1" data-backdrop="static">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-light color-palette">
            <div class="modal-header">
                <h4 class="modal-title">Logout</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <span>Apa kamu yakin ?</span>
                </div>
                <div class="modal-footer justify-content-between">
                    <button class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Tidak</button>
                    <button type="submit" class="btn btn-danger">Ya <i class="fas fa-sign-out-alt"></i></button>
                </div>
            </form>
        </div>
    </div>
</div>
