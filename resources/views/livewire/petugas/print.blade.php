<!DOCTYPE html>
<html>

<head>
    <title>Cetak Butki Peminjaman</title>
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
            Bukti Peminjaman Buku Perpustakaan
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
                            <td>{{ $item->user->name }}</td>
                        </tr>
                        <tr>
                            <td>Buku</td>
                            <td>:</td>
                            <td>
                                @foreach ($item->detail_peminjaman as $detail_peminjaman)
                                    {{ $detail_peminjaman->buku->judul }},
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td>Tanggal Pinjam</td>
                            <td>:</td>
                            <td>{{ $item->tanggal_pinjam }}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Kembali</td>
                            <td>:</td>
                            <td>{{ $item->tanggal_kembali }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="card-footer">
            <b>Note : Jika mengembalikan buku melewati batas hari, akan terkena denda per 1 hari Rp 500</b>
        </div>
    </div>

    <script type="text/javascript">
        window.print();
    </script>

</body>

</html>
