<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Pemasok;
use App\Obat;
use App\Transaksi;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlah_user = User::all()->count();
        $jumlah_obat = Obat::all()->count();
        $jumlah_pemasok = Pemasok::all()->count();
        $jumlah_transaksi = Transaksi::all()->count();
        return view('dashboard', compact('jumlah_user', 'jumlah_obat', 'jumlah_pemasok', 'jumlah_transaksi'));
    }

}
