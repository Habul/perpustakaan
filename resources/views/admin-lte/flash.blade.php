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
