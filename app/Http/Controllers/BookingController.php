<?php

namespace App\Http\Controllers;

//import Model "Post
use App\Models\Booking;

//return type View
use Illuminate\View\View;

//return type redirectResponse
use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $book = Booking::latest()->paginate(5);
        $jumlahbooking = Booking::count();


        //render view with posts
        return view('admin.Booking.index', compact('book','jumlahbooking'));
    }

    /**
     * index
     *
     * @return View
     */
    public function jumlah(): View
    {
        //get posts
        $jumlahbooking = Booking::count();
        $jumlahpasien = Pasien::count();

        //render view with posts
        return view('welcome', compact('jumlahbooking','jumlahpasien'));
    }

    public function indexo(): View
    {
        //get posts

        //render view with posts
        return view('appointment');
    }
    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.Booking.create');
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
            'nama'     => 'required',
            'kelas'   => 'required',
            'telp'      => 'required',
            'penyakit'       => 'required',
            'tanggal' => 'required',
            'pukul' => 'required',
            'status' => 'required'
        ]);

        //create post
        Booking::create([
            'nama'     => $request->nama,
            'kelas'   => $request->kelas,
            'telp'      => $request->telp,
            'penyakit'      => $request->penyakit,
            'tanggal' => $request->tanggal,
            'pukul' => $request->pukul,
            'status' => $request->status
        ]);

        //redirect to index
        return back()->with(['success' => 'Data Berhasil Disimpan!']);
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
        $book = Booking::findOrFail($id);

        //render view with post
        return view('admin.Booking.edit', compact('book'));
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
            'nama'     => 'required',
            'kelas'   => 'required',
            'telp'      => 'required|min:11|max:12',
            'penyakit'       => 'required',
            'tanggal' => 'required',
            'pukul' => 'required',

        ]);

        //get post by ID
        $book = Booking::findOrFail($id);

        //check if image is uploaded

            $book->update([
                'nama'     => $request->nama,
                'kelas'   => $request->kelas,
                'telp'      => $request->telp,
                'penyakit'      => $request->penyakit,
                'tanggal' => $request->tanggal,
                'pukul' => $request->pukul,
                'status' => $request->status
            ]);


        //redirect to index
        return redirect()->route('booking.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $book = Booking::findOrFail($id);

        //delete image
        Storage::delete('public/Booking/'. $book->foto);

        //delete post
        $book->delete();

        //redirect to index
        return redirect()->route('booking.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
