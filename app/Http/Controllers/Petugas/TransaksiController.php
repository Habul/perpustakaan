<?php

namespace App\Http\Controllers\Petugas;

use App\Http\Controllers\Controller;
use App\Models\Peminjaman;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('petugas/transaksi/index');
    }

    public function print(Request $request)
    {
        $print = Peminjaman::where('id', $request->id)->get();

        return view('livewire.petugas.print', [
            'Print' => $print,
        ]);
    }
}
