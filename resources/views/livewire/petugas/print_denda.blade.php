<!DOCTYPE html>
<html>

<head>
    <title>Denda hilang buku</title>
</head>

<body>

    <style type="text/css">
        .card {
            border: 1px solid #000;
            width: 450px;
        }

        .card-header {
            border-bottom: 1px solid #000;
            text-align: center;
            font-weight: bold;
            padding: 10px;

        }

        .card-footer {
            border-top: 1px solid #000;
            text-align: center;
            font-weight: bold;
            padding: 10px;

        }

        .card-body {
            padding: 20px;
        }
    </style>

    <div class="card">
        <div class="card-header">
            Denda Hilang Buku
        </div>
        <div class="card-body">
            <div class="container">
                <table class="table table-borderless table-sm fs-2">
                    @foreach ($Print as $item)
                        <tr>
                            <td width="30%">Kode Pinjaman</td>
                            <td width="2%">:</td>
                            <td>{{ $item->kode_pinjam }}</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>{{ $item->peminjam_nama }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Pinjam</td>
                            <td>:</td>
                            <td>{{ $item->tanggal_pinjam }}</td>
                        </tr>
                        <tr>
                            <td>Denda</td>
                            <td>:</td>
                            <td>{{ $item->denda_hilang }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="card-footer">
            <b>Note : Harap di cek kembali bukunya agar tidak terjadi kehilangan buku kembali</b>
        </div>
    </div>

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>
