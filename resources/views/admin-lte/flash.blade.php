@if (session('sukses'))
    <script>
        toastr.success('{{ session('sukses') }}');
    </script>
@endif
@if (session('gagal'))
    <script>
        toastr.error('{{ session('gagal') }}');
    </script>
@endif
@if (session('info'))
    <script>
        toastr.info('{{ session('info') }}');
    </script>
@endif
@if (session('infoo'))
    <div class="alert alert-success">
        {{ session('infoo') }}
    </div>
@endif
@if (session('gagall'))
    <div class="alert alert-danger">
        {{ session('gagall') }}
    </div>
@endif
