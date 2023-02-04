@section('active-logout', 'active')
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
