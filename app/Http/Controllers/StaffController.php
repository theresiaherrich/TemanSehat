<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Staff;
use App\Models\Booking;
use App\Models\Ruangan;
use App\Models\Siswa;
use App\Models\Obat;
use App\Models\Inventaris;


//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $sat = Staff::latest()->paginate(5);
        $jumlahstaff = Staff::count();


        //render view with posts
        return view('admin.Staff.index', compact('sat','jumlahstaff'));
    }

    /**
     * index
     *
     * @return View
     */
    public function jumlah(): View
    {
        //get posts
        $jumlahstaff = Staff::count();
        $jumlahpasien = Siswa::count();
        $jumlahappointment = Booking::count();
        $jumlahruangan = Ruangan::count();
        $jumlahobat = Obat::count();
        $jumlahinventaris = Inventaris::count();


        //render view with posts
        return view('admin.home', compact('jumlahstaff','jumlahpasien','jumlahappointment','jumlahruangan','jumlahobat','jumlahinventaris'));
    }


    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {

        return view('admin.Staff.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'foto'     => 'required',
            'nama'     => 'required',
            'divisi'   => 'required',
            'ttl'      => 'required',
            'jeniskelamin'=> 'required',
            'telp' => 'required',
        ]);

        //upload image
        $foto = $request->file('foto');
        $foto->storeAs('public/staff', $foto->hashName());

        //create post
        Staff::create([
            'foto'     => $foto->hashName(),
            'nama'     => $request->nama,
            'divisi'   => $request->divisi,
            'ttl'      => $request->ttl,
            'jeniskelamin' => $request->jeniskelamin,
            'telp' => $request->telp
        ]);

        //redirect to index
        return redirect()->route('datastaff.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    // public function show(string $id): View
    // {
    //     //get post by ID
    //     $pass = Pasien::findOrFail($id);

    //     //render view with post
    //     return view('pasien.show', compact('post'));
    // }
/**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $sat = Staff::findOrFail($id);

        //render view with post
        return view('admin.Staff.edit', compact('sat'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'foto'     => 'required',
            'nama'     => 'required',
            'divisi'   => 'required',
            'ttl'      => 'required',
            'jeniskelamin'=> 'required',
            'telp' => 'required',
        ]);

        //get post by ID
        $sat = Staff::findOrFail($id);

        //check if image is uploaded

        if ($request->hasFile('foto')) {

            //upload new image
            $foto = $request->file('foto');
            $foto->storeAs('public/staff', $foto->hashName());

            //delete old image
            Storage::delete('public/staff/'.$sat->foto);

            //update post with new image
            $sat->update([
            'foto'     => $foto->hashName(),
            'nama'     => $request->nama,
            'divisi'   => $request->divisi,
            'ttl'      => $request->ttl,
            'jeniskelamin' => $request->jeniskelamin,
            'telp' => $request->telp
            ]);

        } else {

            //update post without image
            $sat->update([
                'nama'     => $request->nama,
                'divisi'   => $request->divisi,
                'ttl'      => $request->ttl,
                'jeniskelamin' => $request->jeniskelamin,
                'telp' => $request->telp
            ]);
        }

        //redirect to index
        return redirect()->route('datastaff.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

/**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $sat = Staff::findOrFail($id);

        //delete image
        Storage::delete('public/staff/'. $sat->foto);

        //delete post
        $sat->delete();

        //redirect to index
        return redirect()->route('datastaff.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
