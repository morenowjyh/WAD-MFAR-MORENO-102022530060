<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pegawai;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pegawai = Pegawai::all();
        return view("pegawai.index", compact("pegawai"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("pegawai.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "nama"=> 'required|string|max:255',
            "kontak"=> 'required|string|max:50',
            "posisi"=> 'required|in:Chef,Waiter,Kasir',
        ]);

        Pegawai::create([
            'nama'=> $request->nama,
            'kontak'=> $request->kontak,
            'posisi'=> $request->posisi,
        ]);
        return redirect()->route('pegawai.index');

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
        $pegawai = Pegawai::findOrFail( $id );
        return view('pegawai.edit', compact('pegawai'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "nama"=> 'required|string|max:255',
            "kontak"=> 'required|string|max:50',
            "posisi"=> 'required|in:Chef,Waiter,Kasir',
        ]);

        $pegawai = Pegawai::findOrFail( $id );

        Pegawai::update([
            'nama'=> $request->nama,
            'kontak'=> $request->kontak,
            'posisi'=> $request->posisi,
        ]);
        return redirect()->route('pegawai.index');   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pegawai = Pegawai::findOrFail( $id );
        $pegawai->delete();
        return redirect()->route('pegawai.index');
    }
}
