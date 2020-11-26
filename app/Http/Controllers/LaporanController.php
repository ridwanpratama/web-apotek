<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Transaksi;

class LaporanController extends Controller
{
    public function index()
    {
        $data = Transaksi::latest()->get();
        return view ('laporan.transaksi')->withData($data);
    }

    public function search(Request $request)
    {
        $request->validate([
            'startDate'=> 'required',
            'endDate'=> 'required',
            ]);
        $from = $request->startDate;
        $to = $request->endDate;
        $startDate = $from.' 00:00:00';
        $endDate = $to.' 23:59:59';
 
        $data = Transaksi::whereBetween('tanggal_beli', [$startDate,$endDate])->latest()->paginate(5);
 
        return view('laporan.transaksi', compact('data', 'startDate', 'endDate'));
    }

    public function print(Request $request)
    {
 
        $transaksi = $request->transaksi;
        $from = $request->startDate;
        $to = $request->endDate;
        
        $redirect = route('laporan');   
        if(isset($from) && isset($to)){
            $startDate = $from;
            $endDate = $to;
 
            $transaksi = Transaksi::whereBetween('tanggal_beli', [$startDate,$endDate])->latest()->get();
            $startDate = explode(' ', $startDate)[0];
            $endDate = explode(' ', $endDate)[0];
 
            return view('laporan.print', compact('transaksi', 'startDate', 'endDate', 'redirect'));
        }else{
            $transaksi = Transaksi::latest()->get();
 
            return view('laporan.print', compact('transaksi', 'redirect'));
        }
 
    }
}
