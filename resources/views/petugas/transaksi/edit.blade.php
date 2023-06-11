 @if ($edit)
     <div class="modal fade show" id="modal-default" style="display: block;">
         <div class="modal-dialog modal-dialog-centered">
             <div class="modal-content bg-light color-palette">
                 <div class="modal-header">
                     <h4 class="modal-title">Konfirmasi</h4>
                     <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </span>
                 </div>
                 <div class="modal-body">
                     <span>Apakah buku sudah lengkap ?</span>
                 </div>
                 <div class="modal-footer justify-content-between">
                     <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">
                         <i class="fas fa-times-circle"></i> Tidak</span>
                     <span type="button" wire:click="kembali({{ $pinjam_id }})" class="btn btn-success">
                         <i class="fas fa-check-circle"></i> Ya</span>
                 </div>
             </div>
         </div>
     </div>
 @endif
