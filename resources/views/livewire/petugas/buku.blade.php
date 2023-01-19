<div class="row">
    <div class="col-12">

        @include('admin-lte/flash')
        @include('petugas/buku/create')
        @include('petugas/buku/edit')
        @include('petugas/buku/delete')
        @include('petugas/buku/show')

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

            @if ($buku->isNotEmpty())
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover table-sm">
                        <thead class="thead-light text-center">
                            <tr>
                                <th width="10%">No</th>
                                <th>Sampul</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Kategori</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($buku as $item)
                                <tr>
                                    <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                    <td><img src="/storage/{{ $item->sampul }}" alt="{{ $item->judul }}" width="60"
                                            height="80"></td>
                                    <td class="align-middle">{{ $item->judul }}</td>
                                    <td class="align-middle">{{ $item->penulis }}</td>
                                    <td class="align-middle">{{ $item->kategori->nama }}</td>
                                    <td class="align-middle text-center">
                                        <a class="btn btn-success" wire:click="show({{ $item->id }})"
                                            title="Lihat"><i class="fa fa-search"></i></a>
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
            {{ $buku->links() }}
        </div>

        @if ($buku->isEmpty())
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
