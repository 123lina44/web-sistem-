<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Penyewa;
use App\Models\DataKamar;

class PenyewaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Data Penyewa";
        $konf = Setting::first();
        $penyewa = Penyewa::join('data_kamar', 'data_kamar.id_kamar', '=','penyewa.id_kamar')->get();

        return view('penyewa.index', compact('title', 'konf', 'penyewa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "Tambah Data Penyewa";
        $konf = Setting::first();
        $listkamar = DataKamar::get();
        
        return view('penyewa.create', compact('title', 'konf', 'listkamar'));
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
            'penyewa' => 'required',
            'id_kamar' => 'required',
            'jenis_kelamin' =>'required'
        ], $message);

        $kamar = DataKamar::findOrFail($request->id_kamar);

        if ($kamar->status == 'Tidak Tersedia') {
            return redirect()->route('penyewa.index')->with('sukses', 'Maaf Kamar Ini Sudah Tidak Tersedia');
        }else{
            $kamar->status = 'Tidak Tersedia';
            $kamar->save();
        }

        $penyewa = new Penyewa();
        $penyewa->penyewa = $request->penyewa;
        $penyewa->id_kamar = $request->id_kamar;
        $penyewa->jenis_kelamin = $request->jenis_kelamin;
        $penyewa->save();

        return redirect()->route('penyewa.index')->with('sukses', 'Berhasil Tambah Data Penyewa');
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
        $penyewa = Penyewa::join('data_kamar', 'data_kamar.id_kamar', '=','penyewa.id_kamar')->findorfail($id);
        $title = "Edit Data Penyewa";
        $listkamar = DataKamar::get();

        return view('penyewa.edit', compact('penyewa', 'title', 'listkamar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $penyewa = Penyewa::findorfail($id);
        $update = [
            'penyewa' => $request->penyewa, 
            'id_kamar' => $request->id_kamar,
            'jenis_kelamin' => $request->jenis_kelamin
        ];
        $penyewa->update($update);

        return redirect()->route('penyewa.index')->with('sukses', 'Berhasil Edit Data Narasi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penyewa = Penyewa::find($id);
        $penyewa->delete();

        return back()->with('sukses', 'Data Berhasil Dihapus');
    }
}

