 @if ($edit)
     <div class="modal fade show" id="modal-default" style="display: block;">
         <div class="modal-dialog modal-dialog-centered">
             <div class="modal-content bg-light color-palette">
                 <div class="modal-header">
                     <h4 class="modal-title">Edit User</h4>
                     <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </span>
                 </div>
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="nama">Nama</label>
                         <input wire:model="name" type="text" class="form-control" id="nama">
                         @error('name')
                             <small class="text-danger">{{ $message }}</small>
                         @enderror
                     </div>
                     <div class="form-group">
                         <label for="kelas">Kelas</label>
                         <input wire:model="kelas" type="text" class="form-control" id="kelas">
                         @error('kelas')
                             <small class="text-danger">{{ $message }}</small>
                         @enderror
                     </div>
                     <div class="form-group">
                         <label for="email">Email</label>
                         <input wire:model="email" type="email" class="form-control" id="email">
                         @error('email')
                             <small class="text-danger">{{ $message }}</small>
                         @enderror
                     </div>
                     <div class="form-group">
                         <label for="password">Ubah Password</label>
                         <input wire:model="password" type="password" class="form-control" id="password">
                         <small>kosongkan jika tidak ingin mengubah password</small>
                         @error('password')
                             <small class="text-danger">{{ $message }}</small>
                         @enderror
                     </div>
                 </div>
                 <div class="modal-footer justify-content-between">
                     <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">
                         <i class="fas fa-times-circle"></i> Batal</span>
                     <span type="button" wire:click="update({{ $user_id }})" class="btn btn-success">
                         <i class="fas fa-edit"></i> Update</span>
                 </div>
             </div>
         </div>
     </div>
 @endif
