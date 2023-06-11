 @if ($submit)
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
                     <span>Pastikan print bukti peminjaman buku !!</span>
                 </div>
                 <div class="modal-footer">
                     <a href="/transaksi/print/{{ $pinjam_id }}" class="btn btn-warning mr-2" target="_blank"
                         title="Print">
                         <i class="fas fa-print"></i> Print</a>
                     <span type="button" wire:click="pinjam({{ $pinjam_id }})" class="btn btn-success">
                         <i class="fas fa-shopping-basket"></i> Ya</span>
                 </div>
             </div>
         </div>
     </div>
 @endif
