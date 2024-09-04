<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use App\Models\DataKamar;
use App\Models\Testimoni;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konf = Setting::first();
        $kamar = Datakamar::limit(3)->get();
        $testimoni = Testimoni::get();
        return view('welcome', compact('konf', 'kamar', 'testimoni'));
    }

    public function detailkamar($slug)
    {
        $detailkamar = DataKamar::where('slug_kamar', $slug)->first();
        $kamar = DataKamar::limit(3)->get();
        $konf = Setting::first();

        return view('detailkamar', compact('konf', 'detailkamar', 'kamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
            'nama' => 'required',
            'komentar' => 'required'
        ], $message);

       
        $testimoni = new Testimoni();
        $testimoni->nama = $request->nama;
        $testimoni->komentar = $request->komentar;
        $testimoni->save();

        return back()->with('sukses','berhasil Tekirim');
  
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
