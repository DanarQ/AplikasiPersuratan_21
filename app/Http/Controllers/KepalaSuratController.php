<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kepala_surat;
use Illuminate\Http\RedirectResponse;


class KepalaSuratController extends Controller
{
    public function tampilData(string $id):View {
        return view('kepalasurat.profile',[
        'kepalasurat' => Kepala_surat::findOrFail($id)
        ]);
    }
    public function index(): View
    {
       $kepalasurat = Kepala_surat::latest()->paginate(10);
       return view('kepalasurat.index',compact('kepalasurat'));
    }
    public function create(): View
    {
        return view('kepalasurat.create');
    }
    public function store(Request $request): RedirectResponse
    {
        
        //validate form
        $request->validate([
            'nama_kop'      => 'required|min:5|unique:kepala_surat,nama_kop',
            'alamat_kop'      => 'required|min:5',
            'nama_tujuan'         => 'required',
            'user_id'         => 'required'
        ]);

        Kepala_surat::create([
            'nama_kop' => $request->nama_kop,
            'alamat_kop' => $request->alamat_kop,
            'nama_tujuan' => $request->nama_tujuan,
            'user_id' => $request->user_id,
        ]);
        // $user = Kepala_surat::all();

        //redirect to index
        return redirect()->route('kepalasurat.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function show(string $id): View
    {
        $kepalasurat = Kepala_surat::findOrFail($id);

        return view('kepalasurat.show', compact('kepalasurat'));
    }
    public function edit(string $id): View
    {
        $kepalasurat = Kepala_surat::findOrFail($id);

        return view('kepalasurat.edit', compact('kepalasurat'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_kop'      => 'required|min:5|unique:kepala_surat,nama_kop',
            'alamat_kop'      => 'required|min:5',
            'nama_tujuan'         => 'required',
            'user_id'         => 'required'
        ]);

        $kepalasurat = Kepala_surat::findOrFail($id);
        $kepalasurat->update([
            'nama_kop' => $request->nama_kop,
            'alamat_kop' => $request->alamat_kop,
            'nama_tujuan' => $request->nama_tujuan,
            'user_id' => $request->user_id,
            ]);

        return redirect()->route('kepalasurat.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy($id): RedirectResponse
    {
        $kepalasurat = Kepala_surat::findOrFail($id);
        $kepalasurat->delete();
        return redirect()->route('kepalasurat.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
