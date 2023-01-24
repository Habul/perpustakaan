<?php

namespace App\Http\Livewire\Admin;

use App\Models\Peminjaman;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Laporan extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $search;

    public function render()
    {
        if ($this->search) {
            $laporan = Peminjaman::latest()->where('kode_pinjam', 'like', '%' . $this->search . '%')
                ->orWhere('denda', 'like', '%' . $this->search . '%')->where('status', 1)->paginate(5);
        } else {
            $laporan = Peminjaman::latest()->paginate(10);
        }

        return view('livewire.admin.laporan', [
            'laporan' => $laporan,
        ]);
    }
}
