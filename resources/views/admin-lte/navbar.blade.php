<nav class="main-header navbar navbar-expand navbar-light navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a class="nav-link" href="{{ url('/') }}" role="button"><i class="fas fa-home"></i>&nbsp;Home</a>
        </li>
    </ul>

    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <span class="nav-link" id='hclock'>{{ date('Y-m-d H:i:s') }}</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#logout-form" role="button">
                <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </li>
    </ul>
</nav>
