<div class="row">
    <div class="col-12">

        @include('admin-lte/flash')
        @include('petugas/transaksi/edit')
        @include('petugas/transaksi/hilang')
        @include('petugas/transaksi/submit')

        <div class="btn-group mb-3">
            <button wire:click="format" class="btn btn-sm bg-teal mr-2"><i class="fas fa-book-open"></i> Semua</button>
            <button wire:click="belumDipinjam" class="btn btn-sm bg-indigo mr-2"><i class="fas fa-shopping-cart"></i>
                Belum Dipinjam</button>
            <button wire:click="sedangDipinjam" class="btn btn-sm bg-olive mr-2"><i class="far fa-clock"></i>
                Sedang Dipinjam</button>
            <button wire:click="selesaiDipinjam" class="btn btn-sm bg-fuchsia mr-2"><i class="far fa-check-circle"></i>
                Selesai Dipinjam</button>
        </div>

        <div class="card card-primary card-outline">
            <div class="card-header">

                <div class="card-tools">
                    <div class="input-group input-group">
                        <input wire:model="search" type="search" name="table_search" class="form-control float-right"
                            placeholder="Search">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            @if ($transaksi->isNotEmpty())
                <div class="card-body table-responsive">
                    <table id="example2" class="table table-sm table-bordered table-hover">
                        <thead class="thead-light text-center">
                            <tr>
                                <th width="4%">No</th>
                                <th>Kode Pinjam</th>
                                <th>Nama</th>
                                <th>Buku</th>
                                <th>Lokasi</th>
                                <th>Tanggal Pinjam</th>
                                <th>Tanggal Kembali</th>
                                <th>Denda Telat</th>
                                <th>Denda Buku</th>
                                <th>Status</th>
                                @if (!$selesai_dipinjam)
                                    <th width="13%">Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksi as $item)
                                <tr>
                                    <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $item->kode_pinjam }}</td>
                                    <td class="align-middle text-center">{{ $item->user->name }}</td>
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
                                    <td class="align-middle text-center">{{ $item->denda }}</td>
                                    <td class="align-middle text-center">{{ $item->denda_hilang }}</td>
                                    <td class="align-middle text-center">
                                        @if ($item->status == 1)
                                            <span class="badge bg-orange">
                                                Belum Dipinjam</span>
                                        @elseif ($item->status == 2)
                                            <span class="badge bg-olive">Sedang Dipinjam</span>
                                        @else
                                            <span class="badge bg-fuchsia">Selesai Dipinjam</span>
                                        @endif
                                    </td>
                                    @if (!$selesai_dipinjam)
                                        <td class="align-middle text-center">
                                            @if ($item->status == 1)
                                                <a wire:click="submit({{ $item->id }})" class="btn bg-orange"
                                                    title="Pinjam">
                                                    <i class="fas fa-shopping-basket"></i></a>
                                            @elseif ($item->status == 2)
                                                <a class="btn btn-info" wire:click="edit({{ $item->id }})"
                                                    title="kembali ?"><i class="fas fa-undo-alt"></i>
                                                </a>
                                                @if ($item->hilang != 0)
                                                    <a href="/transaksi/print_denda/{{ $item->id }}"
                                                        class="btn btn-danger mr-2" target="_blank" title="Print">
                                                        <i class="fas fa-print"></i></a>
                                                @else
                                                    <a class="btn btn-warning" wire:click="hilang({{ $item->id }})"
                                                        title="Buku Hilang ?">
                                                        <i class="fas fa-exclamation-triangle"></i>
                                                    </a>
                                                @endif
                                            @else
                                                <span class="btn btn-success disabled">
                                                    <i class="fas fa-lock"></i></span>
                                            @endif
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>

        <div class="row justify-content-center">
            {{ $transaksi->links() }}
        </div>

        @if ($transaksi->isEmpty())
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-warning">
                        Anda tidak memiliki data
                    </div>
                </div>
            </div>
        @endif

    </div>
</div>
<!-- /.row -->
