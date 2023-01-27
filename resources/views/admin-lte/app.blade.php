<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin-lte/header')
    @livewireStyles
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed text-sm">
    <div class="wrapper">

        @include('admin-lte/preloader')

        @include('admin-lte/navbar')

        @include('admin-lte/sidebar')

        <div class="content-wrapper">
            @include('admin-lte/main-header')

            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
        @include('admin-lte/footer')

        <aside class="control-sidebar control-sidebar-dark">
        </aside>
    </div>

    @include('admin-lte/javascript')
    @yield('script')
    @livewireScripts
    @yield('chart-script')
</body>

</html>
