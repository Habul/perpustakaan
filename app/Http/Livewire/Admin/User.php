<?php

namespace App\Http\Livewire\Admin;

use App\Models\User as ModelsUser;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Validation\Rules\Password;
use App\Models\peminjaman;

class User extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $admin, $petugas, $peminjam, $search;
    public $create, $name, $email, $password, $password_confirmation, $user_id, $edit, $delete, $kelas;

    protected $validationAttributes = [
        'name' => 'nama',
        'password_confirmation' => 'ulangi password'
    ];

    protected function rules()
    {
        return
            [
                'name' => 'required',
                'email' => ['required', 'email', 'unique:App\Models\User,email'],
                'kelas' => 'required',
                'password' => ['required', 'confirmed', Password::min(8)],
                'password_confirmation' => 'required',
            ];
    }

    public function admin()
    {
        $this->format();
        $this->admin = true;
    }

    public function petugas()
    {
        $this->format();
        $this->petugas = true;
    }

    public function peminjam()
    {
        $this->format();
        $this->peminjam = true;
    }

    public function create()
    {
        $this->create = true;
    }

    public function store()
    {
        $this->validate();

        $user = ModelsUser::create([
            'name' => $this->name,
            'kelas' => $this->kelas,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        if ($this->admin) {
            $user->assignRole('admin');
        } elseif ($this->petugas) {
            $user->assignRole('petugas');
        } else {
            $user->assignRole('peminjam');
        }

        session()->flash('sukses', 'Data berhasil ditambahkan.');
        $this->format();
    }

    public function edit(ModelsUser $user)
    {
        $this->format();

        $this->edit = true;
        $this->user_id = $user->id;
        $this->name = $user->name;
        $this->kelas = $user->kelas;
        $this->email = $user->email;
        // $this->password = $user->password;
    }

    public function update(ModelsUser $user)
    {
        $validasi = [
            'name' => 'required|max:255',
            'kelas' => 'required|max:255',
            'email' => 'required|email:dns',
            // 'password' => 'required|min:5|max:255',
        ];

        $this->validate($validasi);

        $user->update([
            'name' => $this->name,
            'kelas' => $this->kelas,
            'email' => $this->email,
            'password' => bcrypt($this->password)
        ]);

        session()->flash('sukses', 'Data berhasil diubah');
        $this->format();
    }

    public function delete(ModelsUser $user)
    {
        $this->delete = true;
        $this->name  = $user->name;
        $this->user_id = $user->id;
    }

    public function destroy(ModelsUser $user)
    {
        // $user = Peminjaman::where('petugas_pinjam', $user->id)->get();
        // foreach ($user as $key => $value) {
        //     $value->update([
        //         'petugas_pinjam' => 1
        //     ]);
        // }

        $user->delete();

        session()->flash('sukses', 'Data berhasil dihapus.');

        $this->format();
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        if ($this->search) {
            if ($this->admin) {
                $user = ModelsUser::role('admin')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
            } elseif ($this->petugas) {
                $user = ModelsUser::role('petugas')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
            } elseif ($this->peminjam) {
                $user = ModelsUser::role('peminjam')->where('name', 'like', '%' . $this->search . '%')->paginate(5);
            } else {
                $user = ModelsUser::where('name', 'like', '%' . $this->search . '%')->paginate(5);
            }
        } else {
            if ($this->admin) {
                $user = ModelsUser::role('admin')->paginate(10);
            } elseif ($this->petugas) {
                $user = ModelsUser::role('petugas')->paginate(10);
            } elseif ($this->peminjam) {
                $user = ModelsUser::role('peminjam')->paginate(10);
            } else {
                $user = ModelsUser::paginate(10);
            }
        }

        return view('livewire.admin.user', compact('user'));
    }

    public function format()
    {
        $this->admin = false;
        $this->petugas = false;
        $this->peminjam = false;
        unset($this->create);
        unset($this->edit);
        unset($this->delete);
        unset($this->name);
        unset($this->email);
        unset($this->password);
        unset($this->password_confirmation);
        unset($this->user_id);
    }
}
