<?php

namespace App\Http\Controllers;

use App\Pemasok;
use Illuminate\Http\Request;

class PemasokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data= Pemasok::latest()->get();
        return view ('pemasok.index')->withData($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Pemasok::all();
        return view('pemasok.create', compact('data'));
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
            'kode_pemasok'=>'required',
            'nama_pemasok'=>'required',
            ]);
            Pemasok::create([
                'kode_pemasok' => $request->kode_pemasok,
                'nama_pemasok' => $request->nama_pemasok,

            ]);
    
            return redirect('pemasok')->with('message', 'Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pemasok  $pemasok
     * @return \Illuminate\Http\Response
     */
    public function show(Pemasok $pemasok)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pemasok  $pemasok
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Pemasok::findOrFail($id);
        return view('pemasok.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pemasok  $pemasok
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'kode_pemasok'=>'required',
            'nama_pemasok'=>'required',
            ]);
        $data = Pemasok::findorfail($id);
        $data->update($request->all());
        
        return redirect('pemasok')->with('message', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pemasok  $pemasok
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Pemasok::findorfail($id);
        $data->delete();
        return back()->with('delete', 'Data berhasil dihapus');
    }
}
