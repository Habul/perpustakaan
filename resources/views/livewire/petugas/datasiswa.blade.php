<div class="row">
    <div class="col-12">

        @include('admin-lte/flash')
        @include('petugas/siswa/create')
        @include('petugas/siswa/edit')
        @include('petugas/siswa/delete')

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
            @if ($datasiswa->isNotEmpty())
                <div class="card-body table-responsive">
                    <table id="example2" class="table table-bordered table-hover table-sm">
                        <thead class="thead-light text-center">
                            <tr>
                                <th width="10%">No</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($datasiswa as $item)
                                <tr>
                                    <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                    <td class="align-middle text-center">{{ $item->nama }}</td>
                                    <td class="align-middle text-center">{{ $item->kelas }}</td>
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
            @endif
        </div>

        <div class="row justify-content-center">
            {{ $datasiswa->links() }}
        </div>

        @if ($datasiswa->isEmpty())
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
