<div class="row">
    <div class="col-12">

        @include('admin-lte/flash')
        @include('admin/user/create')
        @include('admin/user/edit')
        @include('admin/user/delete')
        <div class="btn-group mb-3">
            <button wire:click="format" class="btn btn-sm bg-teal mr-2">Semua</button>
            <button wire:click="admin" class="btn btn-sm bg-indigo mr-2">Admin</button>
            <button wire:click="petugas" class="btn btn-sm bg-olive mr-2">Petugas</button>
            <button wire:click="peminjam" class="btn btn-sm bg-fuchsia mr-2">Peminjam</button>
        </div>

        <div class="card card-primary card-outline">
            <div class="card-header">
                @if ($admin || $petugas || $peminjam)
                    <a class="btn btn-primary" wire:click="create">
                        <i class="fa fa-plus"></i>&nbsp; Tambah
                    </a>
                @endif

                <div class="card-tools mt-1">
                    <div class="input-group input-group-sm">
                        <input wire:model="search" type="search" name="table_search" class="form-control float-right"
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
            @if ($user->isNotEmpty())
                <div class="card-body table-responsive">
                    <table id="example2" class="table table-striped table-sm">
                        <thead class="thead-light text-center">
                            <tr>
                                <th width="10%">No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Role</th>
                                @if ($admin || $petugas || $peminjam)
                                    <th>Aksi</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                                <tr>
                                    <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                    <td class="align-middle">{{ $item->name }}</td>
                                    <td class="align-middle">{{ $item->email }}</td>
                                    <td class="align-middle text-center">
                                        @if ($item->roles[0]->name == 'admin')
                                            <span class="badge bg-indigo">Admin</span>
                                        @elseif ($item->roles[0]->name == 'petugas')
                                            <span class="badge bg-olive">Petugas</span>
                                        @else
                                            <span class="badge bg-fuchsia">Peminjam</span>
                                        @endif
                                    </td>
                                    @if ($admin || $petugas || $peminjam)
                                        <td class="align-middle text-center">
                                            <a class="btn btn-warning" wire:click="edit({{ $item->id }})"
                                                title="Edit"><i class="fa fa-edit"></i></a>
                                            <a class="btn btn-danger" wire:click="delete({{ $item->id }})"
                                                title="Hapus"><i class="fa fa-trash"></i></a>
                                        </td>
                                    @endif
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
            {{ $user->links() }}
        </div>

        @if ($user->isEmpty())
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
