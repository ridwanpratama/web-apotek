<?php

namespace App\Http\Controllers;

use App\Obat;
use App\Pemasok;   
use Illuminate\Http\Request;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Obat::with('pemasok')->latest()->get();
        return view ('obat.index')->withData($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Obat::all();
        $pemasok = Pemasok::all();
        return view('obat.create', compact('data', 'pemasok'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          //dd($request->all());
        $this->validate($request, [
        'kode_obat'=>'required',
        'nama_obat'=>'required',
        'jenis_obat'=>'required',
        'harga_obat'=>'required',
        'stok_obat'=>'required',
        'pemasok_id'=>'required',
        ]);
        Obat::create([
            'kode_obat' => $request->kode_obat,
            'nama_obat' => $request->nama_obat,
            'jenis_obat' => $request->jenis_obat,
            'harga_obat' => $request->harga_obat,
            'stok_obat' => $request->stok_obat,
            'pemasok_id' => $request->pemasok_id,
            
        ]);

        return redirect('obat')->with('message', 'Data berhasil disimpan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pemasok = Pemasok::all();
        $data = Obat::with('pemasok')->findOrFail($id);
        return view('obat.edit', compact('data', 'pemasok'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id )
    {
        $this->validate($request, [
            'kode_obat'=>'required',
            'nama_obat'=>'required',
            'jenis_obat'=>'required',
            'harga_obat'=>'required',
            'stok_obat'=>'required',
            'pemasok_id'=>'required',
            ]);
        $data = Obat::findorfail($id);
        $data->update($request->all());
        
        return redirect('obat')->with('message', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Obat  $obat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $data = Obat::findorfail($id);
        $data->delete();
        return back()->with('delete', 'Data berhasil dihapus');
    }
}
