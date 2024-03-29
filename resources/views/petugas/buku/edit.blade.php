 @if ($edit)
     <div class="modal fade show" id="modal-default" style="display: block; padding-right: 17px;">
         <div class="modal-dialog modal-lg modal-dialog-centered">
             <div class="modal-content bg-light color-palette">
                 <div class="modal-header">
                     <h4 class="modal-title">Edit Buku</h4>
                     <span wire:click="format" type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </span>
                 </div>
                 <div class="modal-body">
                     <div class="form-group">
                         <label for="judul">Judul</label>
                         <input wire:model="judul" type="text" class="form-control" id="judul">
                         @error('judul')
                             <small class="text-danger">{{ $message }}</small>
                         @enderror
                     </div>
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="penulis">Penulis</label>
                                 <input wire:model="penulis" type="text" class="form-control" id="penulis">
                                 @error('penulis')
                                     <small class="text-danger">{{ $message }}</small>
                                 @enderror
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="total">Total</label>
                                 <input wire:model="total" type="number" class="form-control" id="total"
                                     min="1">
                                 @error('total')
                                     <small class="text-danger">{{ $message }}</small>
                                 @enderror
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="dipinjam">Di Pinjam</label>
                                 <input wire:model="dipinjam" type="text" class="form-control" id="dipinjam">
                                 @error('dipinjam')
                                     <small class="text-danger">{{ $message }}</small>
                                 @enderror
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="form-group">
                                 <label for="stok">Stok</label>
                                 <input wire:model="stok" type="number" class="form-control" id="stok"
                                     min="1">
                                 @error('stok')
                                     <small class="text-danger">{{ $message }}</small>
                                 @enderror
                             </div>
                         </div>
                     </div>
                     <div class="form-group">
                         <label for="sampul">Sampul</label>
                         <input wire:model="sampul" type="file" class="form-control form-control-border"
                             id="sampul" min="1">
                         @error('sampul')
                             <small class="text-danger">{{ $message }}</small>
                         @enderror
                     </div>
                     <div class="row">
                         <div class="col-md-4">
                             <div class="form-group">
                                 <label for="kategori">Kategori</label>
                                 <select wire:model="kategori_id" wire:click="pilihKategori" class="form-control"
                                     id="kategori">
                                     <option selected value="">Pilih Kategori</option>
                                     @foreach ($kategori as $item)
                                         @if ($item->id != 1)
                                             <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                         @endif
                                     @endforeach
                                 </select>
                                 @error('kategori_id')
                                     <small class="text-danger">{{ $message }}</small>
                                 @enderror
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="form-group">
                                 <label for="penerbit">Penerbit</label>
                                 <select wire:model="penerbit_id" class="form-control" id="penerbit">
                                     <option selected value="">Pilih Penerbit</option>
                                     @foreach ($penerbit as $item)
                                         <option value="{{ $item->id }}">{{ $item->nama }}</option>
                                     @endforeach
                                 </select>
                                 @error('penerbit_id')
                                     <small class="text-danger">{{ $message }}</small>
                                 @enderror
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="form-group">
                                 <label for="rak">Rak</label>
                                 <select wire:model="rak_id" class="form-control" id="rak">
                                     <option selected value="">Pilih Rak</option>
                                     @foreach ($rak as $item)
                                         <option value="{{ $item->id }}">Rak : {{ $item->rak }}, Baris :
                                             {{ $item->baris }}</option>
                                     @endforeach
                                 </select>
                                 @error('rak_id')
                                     <small class="text-danger">{{ $message }}</small>
                                 @enderror
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="modal-footer justify-content-between">
                     <span wire:click="format" type="button" class="btn btn-default" data-dismiss="modal">
                         <i class="fas fa-times-circle"></i> Batal</span>
                     <span type="button" wire:click="update({{ $buku_id }})" class="btn btn-warning">
                         <i class="fas fa-edit"></i> Update</span>
                 </div>
             </div>
         </div>
     </div>
 @endif
