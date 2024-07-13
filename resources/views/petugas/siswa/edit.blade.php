@if ($edit)
    <div class="modal fade show" id="modal-default" style="display: block; padding-right: 17px;">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content bg-light color-palette">
                <div class="modal-header">
                    <h4 class="modal-title">Edit Siswa</h4>
                    <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </span>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama</label>
                        <input wire:model="nama" type="text" class="form-control">
                        @error('nama')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="form-group mb-0">
                        <label>Kelas</label>
                        <input wire:model="kelas" type="text" class="form-control">
                        @error('kelas')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">
                        <i class="fas fa-times-circle"></i> Batal</span>
                    <span type="button" wire:click="update({{ $siswa_id }})"" class="btn btn-warning">
                        <i class="fas fa-check-circle"></i> Update</span>
                </div>
            </div>
        </div>
    </div>
@endif
