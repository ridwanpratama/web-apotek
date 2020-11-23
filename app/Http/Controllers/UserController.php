<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::latest()->get();
	    return view ('user.index')->withData($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->_validation($request);

        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'level' => $request->level,
            'email' => $request->email,
        ]);

        return redirect('user')->with('message', 'Data berhasil disimpan');
    }

    public function _validation(Request $request)
    {
        $validation = $request->validate([
            'name' => 'required|max:100|min:3',
            'level' => 'required|min:3',
            'password' => 'required|max:75',
            'email' => 'required'
        ],
        [
            'name.required' => 'harus diisi!',
            'level.required' => 'harus diisi!',
            'password.required' => 'harus diisi!',
            'email.required' => 'harus diisi!',
            'name.max' => 'maksimal 100 digit!',
            'name.min' => 'minimal 3 digit!',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->_validation($request);
        $user = User::findorfail($id);
        $request->merge(['password'=>bcrypt($request->password)]);
        $user->update($request->all());
        return redirect('user')->with('message', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findorfail($id);
        $user->delete();
        return back()->with('delete', 'Data berhasil dihapus');
    }


}
