<div class="row">
    <div class="col-12">

        @include('admin-lte/flash')
        @include('petugas/rak/create')
        @include('petugas/rak/edit')
        @include('petugas/rak/delete')

        <div class="card card-primary card-outline">
            <div class="card-header">
                <a class="btn btn-primary" wire:click="create">
                    <i class="fa fa-plus"></i>&nbsp; Tambah
                </a>
                <div class="card-tools mt-1">
                    <div class="input-group">
                        <select wire:model="search" class="form-control float-right" id="exampleFormControlSelect1">
                            @foreach ($count as $item)
                                <option value="{{ $item->rak }}">{{ $item->rak }}</option>
                            @endforeach
                        </select>

                        <div class="input-group-append">
                            <button wire:click="formatSearch" type="submit" class="btn btn-default">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            @if ($raks->isNotEmpty())
                <div class="card-body table-responsive">
                    <table id="example2" class="table table-bordered table-hover table-sm">
                        <thead class="thead-light text-center">
                            <tr>
                                <th width="10%">No</th>
                                <th>Rak</th>
                                <th>Baris</th>
                                <th>Kategori</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($raks as $item)
                                <tr>
                                    <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                    <td class="align-middle text-center">{{ $item->rak }}</td>
                                    <td class="align-middle text-center">{{ $item->baris }}</td>
                                    <td class="align-middle text-center">{{ $item->kategori->nama }}</td>
                                    <td class="text-center">
                                        <a class="btn btn-warning" wire:click="edit({{ $item->id }})"
                                            title="Edit"><i class="fa fa-edit"></i></a>
                                        <a class="btn btn-danger" wire:click="delete({{ $item->id }})"
                                            title="Hapus"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            @endif
        </div>
        <!-- /.card -->

        <div class="row justify-content-center">
            {{ $raks->links() }}
        </div>

        @if ($raks->isEmpty())
            <div class="card">
                <div class="card-body">
                    <div class="alert alert-warning">
                        Anda tidak memiliki data
                    </div>
                </div>
            </div>
        @endif

    </div>
</div>
<!-- /.row -->
