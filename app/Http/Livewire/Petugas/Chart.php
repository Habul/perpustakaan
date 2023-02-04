<?php

namespace App\Http\Livewire\Petugas;

use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Chart extends Component
{
    public $bulan_tahun;

    public function render()
    {
        if ($this->bulan_tahun) {
            $bulan = substr($this->bulan_tahun, -2);
            $tahun = substr($this->bulan_tahun, 0, 4);

            // $mulai_dipinjam = Peminjaman::select(DB::raw('count(*) as count1, tanggal_pinjam'))
            //     ->groupBy('tanggal_pinjam')
            //     ->whereMonth('tanggal_pinjam', $bulan)
            //     ->whereYear('tanggal_pinjam', $tahun)
            //     ->where('status', 3)
            //     ->get();

            $selesai_dipinjam = Peminjaman::select(DB::raw('count(*) as count, tanggal_pengembalian'))
                ->groupBy('tanggal_pengembalian')
                ->whereMonth('tanggal_pengembalian', $bulan)
                ->whereYear('tanggal_pengembalian', $tahun)
                ->where('status', 3)
                ->get();

            $hari_per_bulan = Carbon::parse($this->bulan_tahun)->daysInMonth;

            // $tanggal_pinjam = [];
            // $count1 = [];
            // for ($i = 1; $i <= $hari_per_bulan; $i++) {
            //     for ($j = 0; $j < count($mulai_dipinjam); $j++) {
            //         if (substr($mulai_dipinjam[$j]->tanggal_pinjam, 0, 2) == $i) {
            //             $tanggal_pinjam[$i] = substr($mulai_dipinjam[$j]->tanggal_pinjam, 0, 2);
            //             $count1[$i] = $mulai_dipinjam[$j]->count1;
            //             break;
            //         } else {
            //             $tanggal_pinjam[$i] = $i;
            //             $count1[$i] = 0;
            //         }
            //     }
            // }

            $tanggal_pengembalian = [];
            $count = [];
            for ($i = 1; $i <= $hari_per_bulan; $i++) {
                for ($j = 0; $j < count($selesai_dipinjam); $j++) {
                    if (substr($selesai_dipinjam[$j]->tanggal_pengembalian, 0, 2) == $i) {
                        $tanggal_pengembalian[$i] = substr($selesai_dipinjam[$j]->tanggal_pengembalian, 0, 2);
                        $count[$i] = $selesai_dipinjam[$j]->count;
                        break;
                    } else {
                        $tanggal_pengembalian[$i] = $i;
                        $count[$i] = 0;
                    }
                }
            }

            $count = collect($count)->flatten();
            $tanggal_pengembalian = collect($tanggal_pengembalian)->flatten();

            $this->emit('ubahBulanTahun', $count, $tanggal_pengembalian);
        }
        return view('livewire.petugas.chart');
    }
}
