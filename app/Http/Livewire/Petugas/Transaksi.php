<?php

namespace App\Http\Livewire\Petugas;

use App\Models\Peminjaman;
use App\Models\Buku as ModelsBuku;
use App\Models\Datasiswa as ModelSiswa;
use App\Models\DetailPeminjaman;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Transaksi extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $belum_dipinjam, $sedang_dipinjam, $selesai_dipinjam, $search, $create, $book, $peminjam_nama, $tgl_pinjam, $books, $siswa;
    public $kode_pinjam, $name, $kelas, $buku, $tanggal_pinjam, $tanggal_kembali, $tanggal_pengembalian, $pinjam_id, $edit, $hilang, $submit, $denda_hilang;

    protected $rules = [
        'peminjam_nama' => 'required',
        'book'          => 'required',
        'tgl_pinjam'    => 'required',
    ];

    public function ceksiswa()
    {
        $cek = ModelSiswa::where('nama', $this->peminjam_nama)->first();

        if ($cek != null) {
            $this->kelas = $cek->kelas;
        } else {
            $this->kelas = null;
        }
    }

    public function create()
    {
        $this->format();
        $this->create = true;
        $this->books = ModelsBuku::all();
        $this->siswa = ModelSiswa::all();
    }

    public function store()
    {
        $this->validate();

        $peminjaman_baru = Peminjaman::create([
            'kode_pinjam'     => random_int(100000000, 999999999),
            'petugas_pinjam'  => auth()->user()->id,
            'peminjam_nama'   => $this->peminjam_nama,
            'tanggal_pinjam'  => $this->tgl_pinjam,
            'tanggal_kembali' => Carbon::create($this->tgl_pinjam)->addDays(10),
            'status'          => 1
        ]);

        DetailPeminjaman::create([
            'peminjaman_id' => $peminjaman_baru->id,
            'buku_id'       => $this->book
        ]);

        session()->flash('sukses', 'Data peminjam berhasil ditambahkan.');
        $this->format();
    }

    public function belumDipinjam()
    {
        $this->format();
        $this->belum_dipinjam = true;
    }

    public function sedangDipinjam()
    {
        $this->format();
        $this->sedang_dipinjam = true;
    }

    public function selesaiDipinjam()
    {
        $this->format();
        $this->selesai_dipinjam = true;
    }

    public function submit(Peminjaman $peminjaman)
    {
        $this->format();
        $this->submit = true;
        $this->pinjam_id = $peminjaman->id;
    }

    public function pinjam(Peminjaman $peminjaman)
    {
        foreach ($peminjaman->detail_peminjaman as $detail_peminjaman) {
            $detail_peminjaman->buku->update([
                'stok' => $detail_peminjaman->buku->stok - 1,
                'dipinjam' => $detail_peminjaman->buku->dipinjam + 1,
            ]);
        }

        $peminjaman->update([
            'petugas_pinjam' => auth()->user()->id,
            'status' => 2
        ]);
        session()->flash('sukses', 'Buku berhasil dipinjam.');
        $this->format();
    }

    public function edit(Peminjaman $peminjaman)
    {
        $this->format();
        $this->edit = true;
        $this->pinjam_id = $peminjaman->id;
    }

    public function kembali(Peminjaman $peminjaman)
    {

        $data = [
            'status' => 3,
            'petugas_kembali' => auth()->user()->id,
            'tanggal_pengembalian' => today(),
            'denda' => 0
        ];

        foreach ($peminjaman->detail_peminjaman as $detail_peminjaman) {
            $detail_peminjaman->buku->update([
                'stok' => $detail_peminjaman->buku->stok + 1,
                'dipinjam' => $detail_peminjaman->buku->dipinjam - 1
            ]);
        }

        if (Carbon::create($peminjaman->tanggal_kembali)->lessThan(today())) {
            $denda = Carbon::create($peminjaman->tanggal_kembali)->diffInDays(today());
            $denda *= 500;
            $data['denda'] = $denda;
        }

        $peminjaman->update($data);
        session()->flash('sukses', 'Buku berhasil dikembalikan.');
        $this->format();
    }

    public function hilang(Peminjaman $peminjaman)
    {
        $this->format();
        $this->hilang = true;
        $this->pinjam_id = $peminjaman->id;
    }

    public function update(Peminjaman $peminjaman)
    {
        $peminjaman->update([
            'denda_hilang' => $this->denda_hilang * 30000,
            'hilang' => '1'
        ]);
        session()->flash('sukses', 'Denda sudah di tambahkan');
        $this->format();
    }

    public function render()
    {
        if ($this->search) {
            if ($this->belum_dipinjam) {
                $transaksi = Peminjaman::latest()->where('kode_pinjam', 'like', '%' . $this->search . '%')
                    ->orWhere('denda', 'like', '%' . $this->search . '%')->where('status', 1)->paginate(5);
            } elseif ($this->sedang_dipinjam) {
                $transaksi = Peminjaman::latest()->where('kode_pinjam', 'like', '%' . $this->search . '%')
                    ->orWhere('denda', 'like', '%' . $this->search . '%')->where('status', 2)->paginate(5);
            } elseif ($this->selesai_dipinjam) {
                $transaksi = Peminjaman::latest()->where('kode_pinjam', 'like', '%' . $this->search . '%')
                    ->orWhere('denda', 'like', '%' . $this->search . '%')->where('status', 3)->paginate(5);
            } else {
                $transaksi = Peminjaman::latest()->where('kode_pinjam', 'like', '%' . $this->search . '%')
                    ->orWhere('denda', 'like', '%' . $this->search . '%')->where('status', '!=', 0)->paginate(5);
            }
        } else {
            if ($this->belum_dipinjam) {
                $transaksi = Peminjaman::latest()->where('status', 1)->paginate(5);
            } elseif ($this->sedang_dipinjam) {
                $transaksi = Peminjaman::latest()->where('status', 2)->paginate(5);
            } elseif ($this->selesai_dipinjam) {
                $transaksi = Peminjaman::latest()->where('status', 3)->paginate(5);
            } else {
                $transaksi = Peminjaman::latest()->where('status', '!=', 0)->paginate(5);
            }
        }

        return view('livewire.petugas.transaksi', [
            'transaksi' => $transaksi,
        ]);
    }

    public function format()
    {
        $this->sedang_dipinjam  = false;
        $this->belum_dipinjam   = false;
        $this->selesai_dipinjam = false;
        unset($this->create);
        unset($this->peminjam_nama);
        unset($this->tgl_pinjam);
        unset($this->book);
        unset($this->kelas);
        unset($this->edit);
        unset($this->hilang);
        unset($this->submit);
    }
}
