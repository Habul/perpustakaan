<?php

namespace App\Http\Livewire\Petugas;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Datasiswa as ModelSiswa;

class Datasiswa extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $create, $edit, $delete;
    public $nama, $kelas, $siswa_id, $search;

    protected $rules = [
        'nama' => 'required',
        'kelas' => 'required'
    ];

    public function create()
    {
        $this->create = true;
    }

    public function store()
    {
        $this->validate();

        ModelSiswa::create([
            'nama'  => $this->nama,
            'kelas' => $this->kelas
        ]);

        session()->flash('sukses', 'Data berhasil ditambahkan.');
        $this->format();
    }

    public function edit(ModelSiswa $siswa)
    {
        $this->format();

        $this->edit = true;
        $this->nama = $siswa->nama;
        $this->kelas = $siswa->kelas;
        $this->siswa_id = $siswa->id;
    }

    public function update(ModelSiswa $siswa)
    {
        $this->validate();

        $siswa->update([
            'nama' => $this->nama,
            'kelas' => $this->kelas,
        ]);

        session()->flash('sukses', 'Data berhasil diubah.');
        $this->format();
    }

    public function delete(ModelSiswa $siswa)
    {
        $this->delete   = true;
        $this->siswa_id = $siswa->id;
        $this->nama     = $siswa->nama;
    }

    public function destroy(ModelSiswa $siswa)
    {
        $siswa->delete();

        session()->flash('sukses', 'Data berhasil dihapus.');
        $this->format();
    }


    public function render()
    {
        if ($this->search) {
            $datasiswa = ModelSiswa::latest()->where('nama', 'like', '%' . $this->search . '%')->orWhere('kelas', 'like', '%' . $this->search . '%')->paginate(10);
        } else {
            $datasiswa = ModelSiswa::latest()->paginate(10);
        }

        return view('livewire.petugas.datasiswa', [
            'datasiswa' => $datasiswa
        ]);
    }

    public function format()
    {
        unset($this->create);
        unset($this->edit);
        unset($this->delete);
        unset($this->nama);
        unset($this->kelas);
        unset($this->siswa_id);
    }
}
