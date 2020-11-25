<?php

namespace App\Http\Controllers;

use App\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Transaksi::latest()->get();
        return view ('transaksi.index')->withData($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Transaksi::all();
        return view('transaksi.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kode_transaksi'=>'required',
            'obat_id'=>'required',
            'nama_kasir'=>'required',
            'jumlah_beli'=>'required',
            'total_harga'=>'required',
            'tanggal_beli'=>'required',
            ]);
            Transaksi::create([
                'kode_transaksi' => $request->kode_transaksi,
                'obat_id' => $request->obat_id,
                'nama_kasir' => $request->nama_kasir,
                'jumlah_beli' => $request->jumlah_beli,
                'total_harga' => $request->total_harga,
                'tanggal_beli' => $request->tanggal_beli,
                
            ]);
    
            return redirect('transaksi')->with('message', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Transaksi::findOrFail($id);
        return view('transaksi.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //dd($request->all());
        $this->validate($request, [
            'kode_transaksi'=>'required',
            'obat_id'=>'required',
            'nama_kasir'=>'required',
            'jumlah_beli'=>'required',
            'total_harga'=>'required',
            'tanggal_beli'=>'required',
            ]);
        $data = Transaksi::findorfail($id);
        $data->update($request->all());
        
        return redirect('transaksi')->with('message', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Transaksi::findorfail($id);
        $data->delete();
        return back()->with('delete', 'Data berhasil dihapus');
    }
}
