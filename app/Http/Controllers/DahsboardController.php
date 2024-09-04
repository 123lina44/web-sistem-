<?php

namespace App\Http\Controllers;
use App\Models\Setting;
use App\Models\DataKamar;
use App\Models\Penyewa;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;


class DahsboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $konf = Setting::first();
        $kamar = DataKamar::count();
        $penyewa = Penyewa::count();
        $penyewaGet = Penyewa::join('data_kamar', 'data_kamar.id_kamar', '=','penyewa.id_kamar')->get();
        $title = "Dashboard";

        return view('dashboard.index', compact('konf', 'title', 'kamar', 'penyewa', 'penyewaGet'));
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
        //
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
