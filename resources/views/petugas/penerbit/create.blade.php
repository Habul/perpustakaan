 @if ($create)
     <div class="modal fade show" id="modal-default" style="display: block; padding-right: 17px;">
         <div class="modal-dialog modal-dialog-centered">
             <div class="modal-content bg-light color-palette">
                 <div class="modal-header">
                     <h4 class="modal-title">Tambah Penerbit</h4>
                     <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </span>
                 </div>
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="penerbit">Penerbit</label>
                         <input wire:model="nama" type="text" class="form-control" id="nama" min="1">
                         @error('nama')
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
