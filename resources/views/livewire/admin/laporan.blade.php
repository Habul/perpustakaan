<div class="row">
    <div class="col-md-6">
        <div class="card card-info">
            <div class="card-header">
                <h4 class="card-title">Cari Laporan</h4>
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
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="akhir">Periode Akhir</label>
                        <input wire:model="akhir" type="date" class="form-control" name="period_akhir"
                            id="akhir">
                    </div>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select wire:model="status" id="" class="form-control" id="status">
                        <option value="1">{{ __('Login') }}</option>
                    </select>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-outline-info col-6" type="submit"><i class="fas fa-search"></i>
                        Priview</button>
                </div>
            </div>
        </div>
    </div>
</div>
