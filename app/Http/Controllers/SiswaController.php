<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Siswa;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(): View
    {
        $pasien = Siswa::latest()->paginate(5);
        $jumlahpasien = Siswa::count();

        return view('admin.Pasien.index', compact ('pasien', 'jumlahpasien'));
    }

    public function jumlah(): View
    {
        $jumlahpasien = Siswa::count();

        return view('admin.home', compact('jumlahbooking', 'jumlahpasien'));
    }

    public function create(): View
    {
        return view('admin.Pasien.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'foto'          =>'required',
            'nama'          =>'required',
            'kelas'         =>'required',
            'penyakit'      =>'required',
            'jeniskelamin'  =>'required',
            'ruangan'       =>'required',
            'status'        =>'required',
            'telp'          =>'required'
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('public/pasien', $foto->hashName());

        $pasien::create([
            'foto'          => $foto->hashName(),
            'nama'          => $request->nama,
            'kelas'         =>$request->kelas,
            'penyakit'      =>$request->penyakit,
            'jeniskelamin'  =>$request->jeniskelamin,
            'ruangan'       =>$request->ruangan,
            'status'        =>$request->status,
            'telp'          =>$request->telp
        ]);
        return redirect()->route('pasien.index')->with(['success' => 'Data Pasien Berhasil Disimpan!']);
    }
    public function edit(string $id): View
    {
        $pasien = Siswa::findorFail($id);
        return view('admin.Pasien.edit', compact('pasien'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'foto'          =>'required',
            'nama'          =>'required',
            'kelas'         =>'required',
            'penyakit'      =>'required',
            'jeniskelamin'  =>'required',
            'ruangan'       =>'required',
            'status'        =>'required',
            'telp'          =>'required'
        ]);

        $pasien = Siswa::findorFail($id);

        //check if image is upload
        if ($request->hasFile('foto')) {

            //upload new image
            $foto = $request->file('foto');
            $foto->storeAs('public/pasien', $foto->hashName());

            //delete old image
            Storage::delete('public/pasien/'.$pasien->foto);

        $pasien::update([
            'foto'          => $foto->hashName(),
            'nama'          => $request->nama,
            'kelas'         =>$request->kelas,
            'penyakit'      =>$request->penyakit,
            'jeniskelamin'  =>$request->jeniskelamin,
            'ruangan'       =>$request->ruangan,
            'status'        =>$request->status,
            'telp'          =>$request->telp
        ]);

    } else {
        $pasien->update([
            'nama'          => $request->nama,
            'kelas'         =>$request->kelas,
            'penyakit'      =>$request->penyakit,
            'jeniskelamin'  =>$request->jeniskelamin,
            'ruangan'       =>$request->ruangan,
            'status'        =>$request->status,
            'telp'          =>$request->telp
        ]);
    }
        //redirect to index
        return redirect()->route('pasien.index')->with(['success' => 'Data Pasien Berhasil Diubah!']);
        }
        public function destroy($id): RedirectResponse
        {
            $pasien = Siswa::findorFail($id);
            //delete image
            Storage::delete('public/Pasien/'. $pasien->foto);
            //delete post
            $pasien->delete();
            //redirect to index
            return redirect()->route('pasien.index')->with(['success' => 'Data Pasien Berhasil Diubah!']);
        }
}
