<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Narasi;

class NarasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Data Narasi";
        $konf = Setting::first();
        $narasi = Narasi::get();

        return view('narasi.index', compact('title', 'konf', 'narasi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Data narasi";
        $konf = Setting::first();
        
        return view('narasi.create', compact('title', 'konf'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = [
            'required' => ':attribute wajib diisi!!!',
        ];

        $request->validate([
            'narasi' => 'required'
        ], $message);

        $tentang = new Narasi();
        $tentang->narasi = $request->narasi;
        $tentang->save();

        return redirect()->route('narasi.index')->with('sukses', 'Berhasil Tambah Data Narasi');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $narasi = Narasi::findorfail($id);
        $title = "Edit Data Narasi";

        return view('narasi.edit', compact('narasi', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $narasi = Narasi::findorfail($id);
        $update = [
            'narasi' => $request->narasi, 
        ];
        $narasi->update($update);

        return redirect()->route('narasi.index')->with('sukses', 'Berhasil Edit Data Narasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $narasi = Narasi::find($id);
        $narasi->delete();

        return back()->with('sukses', 'Data Berhasil Dihapus');
    }
}
