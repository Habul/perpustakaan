@if ($create)
    <div class="modal fade show" id="modal-default" style="display: block; padding-right: 17px;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-light color-palette">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Peminjaman </h4>
                    <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </span>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="peminjam_nama">Nama Peminjam</label>
                        <input wire:model="peminjam_nama" type="text" class="form-control" id="peminjam_nama">
                        @error('peminjam_nama')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="book">Buku</label>
                        <select wire:model="book" class="form-control" id="book">
                            <option selected value="">Pilih Buku</option>
                            @foreach ($books as $item)
                                <option value="{{ $item->id }}">{{ $item->judul }}</option>
                            @endforeach
                        </select>
                        @error('book')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-0">
                        <label for="tgl_pinjam">Tanggal Peminjaman</label>
                        <input wire:model="tgl_pinjam" type="date" class="form-control" id="tgl_pinjam">
                        @error('tgl_pinjam')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">
                        <i class="fas fa-times-circle"></i> Batal</span>
                    <span type="button" wire:click="store" class="btn btn-primary">
                        <i class="fas fa-check-circle"></i> Simpan</span>
                </div>
            </div>
        </div>
    </div>
@endif
