<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ppdb;

class PpdbsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ppdb = Ppdb::all();
        return view('ppdb.index',compact('ppdb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ppdb.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ppdb = new Ppdb;
        $ppdb->nama_lengkap     = $request->nama;
        $ppdb->jenis_kelamin    = $request->jk;
        $ppdb->agama            = $request->agama;
        $ppdb->alamat           = $request->alamat;
        $ppdb->telepon          = $request->telepon;
        $ppdb->asal_sekolah     = $request->sekolah;
        $ppdb->save();

        return redirect('ppdb')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ppdb = Ppdb::FindOrFail($id);
        return view('ppdb.show', compact('ppdb'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ppdb = Ppdb::FindOrFail($id);
        return view('ppdb.edit', compact('ppdb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ppdb = Ppdb::findOrfail($id);
        $ppdb->nama_lengkap     = $request->nama;
        $ppdb->jenis_kelamin    = $request->jk;
        $ppdb->agama            = $request->agama;
        $ppdb->alamat           = $request->alamat;
        $ppdb->telepon          = $request->telepon;
        $ppdb->asal_sekolah     = $request->sekolah;
        $ppdb->save();

        return redirect('ppdb')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ppdb = Ppdb::findOrfail($id);
        $ppdb->delete();
        return redirect('ppdb')->with('success', 'Data Berhasil Dihapus');
    }
    
}
