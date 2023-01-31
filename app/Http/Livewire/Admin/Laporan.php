<?php

namespace App\Http\Livewire\Admin;

use App\Models\Peminjaman;
use Livewire\Component;

class Laporan extends Component
{
    public function render()
    {
        $laporan = Peminjaman::latest()->where('status', 3)->get();


        return view('livewire.admin.laporan', [
            'laporan' => $laporan,
        ]);
    }
}
