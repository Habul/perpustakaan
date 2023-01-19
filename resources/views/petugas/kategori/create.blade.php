  @if ($create)
      <div class="card">
          <div class="card-body bg-light color-palette">
              <div class="form-group">
                  <label for="nama">Kategori</label>
                  <input wire:model="nama" type="text" class="form-control" id="nama" name="nama">
                  @error('nama')
                      <small class="text-danger">{{ $message }}</small>
                  @enderror
              </div>
              <span wire:click="store" class="btn btn-primary"><i class="fas fa-check-circle"></i> Simpan</span>
          </div>
      </div>
  @endif
