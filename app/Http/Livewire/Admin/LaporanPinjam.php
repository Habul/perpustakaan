<?php

namespace App\Http\Livewire\Admin;

use App\Models\Peminjaman;
use Livewire\Component;

class LaporanPinjam extends Component
{
    public function render()
    {
        $laporanpinjam = Peminjaman::latest()->where('status', 2)->get();

        return view('livewire.admin.laporan-pinjam', [
            'laporanpinjam' => $laporanpinjam,
        ]);
    }
}
