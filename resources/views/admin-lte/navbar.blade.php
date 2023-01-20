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
