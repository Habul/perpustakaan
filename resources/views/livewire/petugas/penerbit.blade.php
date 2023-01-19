<div class="row">
    <div class="col-12">

        @include('admin-lte/flash')

        @include('petugas/penerbit/create')
        @include('petugas/penerbit/edit')
        @include('petugas/penerbit/delete')

        <div class="card card-primary card-outline">
            <div class="card-header">
                <a class="btn btn-primary" wire:click="create">
                    <i class="fa fa-plus"></i>&nbsp; Tambah
                </a>
                <div class="card-tools mt-1">
                    <div class="input-group">
                        <input wire:model="search" type="text" name="table_search" class="form-control float-right"
                            placeholder="Search">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-default">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            @if ($penerbit->isNotEmpty())
                <div class="card-body table-responsive">
                    <table id="example2" class="table table-bordered table-hover table-sm">
                        <thead class="thead-light text-center">
                            <tr>
                                <th width="10%">No</th>
                                <th>Penerbit</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penerbit as $item)
                                <tr>
                                    <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $item->nama }}</td>
                                    <td class="align-middle text-center">
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
            {{ $penerbit->links() }}
        </div>

        @if ($penerbit->isEmpty())
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
