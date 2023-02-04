@section('menu-keranjang-active', 'active')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Keranjang</h1>
        </div>
    </div>

    @include('admin-lte/flash')

    <div class="row">
        @if ($keranjang->status == '0')
            <div class="col-md-12 mb-4">
                <label for="tanggal_pinjam">Tanggal Pinjam</label>
                <input wire:model="tanggal_pinjam" type="date" class="form-control" id="tanggal_pinjam">
                @error('tanggal_pinjam')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
        @endif
    </div>

    <div class="row">
        <div class="col-md-12 mb-2">
            @if ($keranjang->status == '0' || $keranjang->status == '1' || $keranjang->status == '2')
                <strong>Tanggal Pinjam: {{ $keranjang->tanggal_pinjam }}</strong>
            @endif
            <strong class="float-right">Kode Pinjam : {{ $keranjang->kode_pinjam }}</strong>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Rak</th>
                        <th>Baris</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keranjang->detail_peminjaman as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->buku->judul }}</td>
                            <td>{{ $item->buku->penulis }}</td>
                            <td>{{ $item->buku->rak->rak }}</td>
                            <td>{{ $item->buku->rak->baris }}</td>
                            <td>
                                @if ($keranjang->status == '0' || $keranjang->status == '1')
                                    <button wire:click="hapus({{ $keranjang->id }}, {{ $item->id }})"
                                        class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></button>
                                @else
                                    <button class="btn btn-sm btn-warning" title="Sedang di pinjam"><i
                                            class="fas fa-lock"></i></button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @if ($keranjang->status == '0' || $keranjang->status == '1')
                <div class="d-flex justify-content-around">
                    <button wire:click="hapusMasal" class="btn btn-sm btn-danger">
                        <i class="fas fa-recycle"></i> Hapus Masal</button>
                    <button wire:click="pinjam({{ $keranjang->id }})" class="btn btn-sm btn-success">
                        <i class="fas fa-shopping-basket"></i> Pinjam</button>
                </div>
            @endif
        </div>
    </div>
</div>
