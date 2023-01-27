<div class="content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h1 class="m-0">@yield('title')</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                    @if (!request()->is('dashboard'))
                        <li class="breadcrumb-item active">@yield('title')</li>
                    @endif
                </ol>
            </div>
        </div>
    </div>
</div>
