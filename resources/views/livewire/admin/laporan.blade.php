<div class="row">
    <div class="col-12">
        <div class="card card-info card-outline">
            <div class="card-header">
                <h4 class="card-title">Laporan Perpustakaan</h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table id="index1" class="table table-sm table-bordered table-striped">
                    <thead class="thead-light text-center">
                        <tr>
                            <th width="4%">No</th>
                            <th>Kode Pinjam</th>
                            <th>Nama</th>
                            {{-- <th>Kelas</th> --}}
                            <th>Buku</th>
                            <th>Lokasi</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Pengembalian</th>
                            <th>Denda Telat</th>
                            <th>Denda Buku</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($laporan as $item)
                            <tr>
                                <td class="align-middle text-center"></td>
                                <td class="align-middle">{{ $item->kode_pinjam }}</td>
                                <td class="align-middle text-center">{{ ucwords($item->peminjam_nama) }}</td>
                                {{-- <td class="align-middle text-center">{{ $item->user->kelas }}</td> --}}
                                <td class="align-middle">
                                    <ul>
                                        @foreach ($item->detail_peminjaman as $detail_peminjaman)
                                            <li>{{ $detail_peminjaman->buku->judul }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="align-middle">
                                    <ul>
                                        @foreach ($item->detail_peminjaman as $detail_peminjaman)
                                            <li>{{ $detail_peminjaman->buku->rak->lokasi }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="align-middle text-center">{{ $item->tanggal_pinjam }}</td>
                                <td class="align-middle text-center">{{ $item->tanggal_kembali }}</td>
                                <td class="align-middle text-center">
                                    @empty($item->tanggal_pengembalian)
                                        {{ '-' }}
                                    @else
                                        {{ $item->tanggal_pengembalian }}
                                    @endempty
                                </td>
                                <td class="align-middle text-center">{{ $item->denda }}</td>
                                <td class="align-middle text-center">{{ $item->denda_hilang }}</td>
                                <td class="align-middle text-center">
                                    @if ($item->status == 1)
                                        <span class="badge bg-indigo">
                                            Belum Dipinjam</span>
                                    @elseif ($item->status == 2)
                                        <span class="badge bg-olive">Sedang Dipinjam</span>
                                    @else
                                        <span class="badge bg-fuchsia">Selesai Dipinjam</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
