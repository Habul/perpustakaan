<div class="row">
    <div class="col-md-6">
        <div class="card card-info">
            <div class="card-header">
                <h4 class="card-title">Cari laporan by tanggal pinjam</h4>
                <div class="card-tools">
                    <button type="button" class="btn btn-xs btn-icon btn-circle" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-xs btn-icon btn-circle" data-card-widget="maximize">
                        <i class="fas fa-expand"></i>
                    </button>
                    <button type="button" class="btn btn-xs btn-icon btn-circle" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="awal">Periode Awal</label>
                        <input wire:model="awal" type="date" class="form-control" name="period_awal" id="awal">
                        @error('awal')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="akhir">Periode Akhir</label>
                        <input wire:model="akhir" type="date" class="form-control" name="period_akhir"
                            id="akhir">
                        @error('akhir')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select wire:model="status" id="status" class="form-control" id="status">
                        <option value="">{{ __('Semua') }}</option>
                        <option value="1">{{ __('Akan di Pinjam') }}</option>
                        <option value="2">{{ __('Sedang di Pinjam') }}</option>
                        <option value="3">{{ __('Selesai di Pinjam') }}</option>
                    </select>
                    @error('status')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-outline-info col-6" wire:model="show"><i class="fas fa-search"></i>
                        Priview</button>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- @if ($show)
    <div class="row">
        <div class="col-12">
            <div class="card card-info card-outline">
                <div class="card-header">
                    <h4 class="card-title">Laporan Perpustakaan</h4>
                    <div class="card-tools">
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
                </div>
                @if ($laporan->isNotEmpty())
                    <div class="card-body table-responsive">
                        <table id="example1" class="table table-sm table-bordered table-striped">
                            <thead class="thead-light text-center">
                                <tr>
                                    <th width="4%">No</th>
                                    <th>Kode Pinjam</th>
                                    <th>Nama</th>
                                    <th>Kelas</th>
                                    <th>Buku</th>
                                    <th>Lokasi</th>
                                    <th>Tanggal Pinjam</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Pengembalian</th>
                                    <th>Denda</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($laporan as $item)
                                    <tr>
                                        <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                        <td class="align-middle">{{ $item->kode_pinjam }}</td>
                                        <td class="align-middle text-center">{{ $item->user->name }}</td>
                                        <td class="align-middle text-center">{{ $item->user->kelas }}</td>
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
                @endif
            </div>

            <div class="row justify-content-center">
                {{ $laporan->links() }}
            </div>

            @if ($laporan->isEmpty())
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
@endif --}}
