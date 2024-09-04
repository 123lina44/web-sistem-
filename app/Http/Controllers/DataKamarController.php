<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Setting;
use App\Models\DataKamar;

class DataKamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Data Kamar";
        $konf = Setting::first();
        $kamar = DataKamar::get();

        return view('datakamar.index', compact('title', 'konf', 'kamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Data Kamar";
        $konf = Setting::first();
        
        return view('datakamar.create', compact('title', 'konf'));
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
            'no_kamar' => 'required',
            'harga' => 'required',
            'ukuran_kamar' => 'required',
            'status' => 'required',
            'jumlah_max_kamar' => 'required',
            'foto_kamar' => 'required: jpg, jpeg, png, tfif, jfif, raw, gif, ai, psd',
            'deskripsi' => 'required',
        ], $message);
        $foto_kamar = $request->file('foto_kamar');
        $namafotokamar = 'kamar'.date('Ymdhis').'.'.$request->file('foto_kamar')->getClientOriginalExtension();
        $foto_kamar->move('file/kamar/',$namafotokamar);

        $kamar = new DataKamar();
        $kamar->no_kamar = $request->no_kamar;
        $kamar->harga = $request->harga;
        $kamar->ukuran_kamar = $request->ukuran_kamar;
        $kamar->status = $request->status;
        $kamar->jumlah_max_kamar = $request->jumlah_max_kamar;
        $kamar->foto_kamar = $namafotokamar;
        $kamar->deskripsi = $request->deskripsi;
        $kamar->slug_kamar = Str::slug($request->no_kamar); 
        $kamar->save();
        return redirect()->route('datakamar.index')->with('sukses', 'Berhasil Tambah Data Kamar');
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
        $kamar = DataKamar::findorfail($id);
        $title = "Edit Data Kamar";
        return view('datakamar.edit', compact('kamar', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kamar = DataKamar::findorfail($id);
        $namafotokamar = $kamar->foto_kamar;
        $update = [
            'no_kamar' => $request->no_kamar, 
            'harga' => $request->harga,
            'ukuran_kamar' => $request->ukuran_kamar,
            'status' => $request->status,
            'jumlah_max_kamar' => $request->jumlah_max_kamar,
            'foto_kamar' => $namafotokamar,
            'deskripsi' => $request->deskripsi,
            'slug_kamar' => Str::slug($request->no_kamar),
        ];
        if ($request->foto_kamar != ""){
            $request->foto_kamar->move(public_path('file/kamar/'), $namafotokamar);
        }   
        $kamar->update($update);
        return redirect()->route('datakamar.index')->with('sukses', 'Berhasil Edit Data Kamar');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kamar = DataKamar::find($id);
        $namafotokamar = $kamar->foto_kamar;
        $file_kamar = public_path('file/kamar/').$namafotokamar;
        if(file_exists($file_kamar)){
            @unlink($file_kamar);
        }
        $kamar->delete();
        return back()->with('sukses', 'Data Berhasil Dihapus');
    }
}
