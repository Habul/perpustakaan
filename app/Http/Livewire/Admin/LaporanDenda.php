<?php

namespace App\Http\Livewire\Admin;

use App\Models\Peminjaman;
use Livewire\Component;

class LaporanDenda extends Component
{
    public function render()
    {
        $laporandenda = Peminjaman::latest()->where('status', 3)->where('denda_hilang', '<>', '0')->orWhere('denda', '<>', '0')->get();

        return view('livewire.admin.laporan-denda', [
            'laporandenda' => $laporandenda,
        ]);
        return view('livewire.laporan-denda');
    }
}
