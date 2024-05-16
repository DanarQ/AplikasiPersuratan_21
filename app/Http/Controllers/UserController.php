<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function tampilData(string $id):View {

        return view('user.profile',[
        'user' => User::findOrFail($id)
        ]);
    }
    public function index(): View
    {
       $user = User::latest()->paginate(10);
       return view('user.index',compact('user'));
    }
    public function create(): View
    {
        return view('user.create');
    }

    public function store(Request $request): RedirectResponse
    {
       
        //validate form
        $request->validate([
            'username'      => 'required|min:5|unique:users,username',
            'password'      => 'required|min:5',
            'status'         => 'required',
            'nama_ptgs'         => 'required'
        ]);

        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'status' => $request->status,
            'nama_ptgs' => $request->nama_ptgs,
        ]); 
        //redirect to index
        return redirect()->route('pengguna.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $pengguna = User::findOrFail($id);

        return view('user.show', compact('pengguna'));
    }

    public function edit(string $id): View
    {
        $pengguna = User::findOrFail($id);

        return view('user.edit', compact('pengguna'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'username'      => 'required|min:5',
            'password'      => 'required|min:5',
            'status'         => 'required',
            'nama_ptgs'         => 'required'
        ]);

        $pengguna = User::findOrFail($id);
        $pengguna->update([
                'username'  => $request->username,
                'password'  => md5($request->password),
                'status'     => $request->status,
                'nama_ptgs'     => $request->nama_ptgs,
            ]);

        return redirect()->route('pengguna.index')->with(['success' => 'Data Berhasil Diubah!']);
    }


     public function destroy($id): RedirectResponse
    {
        $pengguna = User::findOrFail($id);
        $pengguna->delete();
        return redirect()->route('pengguna.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
