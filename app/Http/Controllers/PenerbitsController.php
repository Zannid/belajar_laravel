<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penerbit;

class PenerbitsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penerbit = Penerbit::all();
        return view('penerbit.index',compact('penerbit'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penerbit.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([

            'nama_penerbit' => 'required'
           

        ],
        [
            'nama_penerbit.required'=> 'Nama Penerbit harus di isi'
        ]);
        $penerbit = new Penerbit;
        $penerbit->nama_penerbit     = $request->nama_penerbit;
        $penerbit->save();

        return redirect('penerbit')->with('success', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $penerbit = Penerbit::FindOrFail($id);
        return view('penerbit.show', compact('penerbit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $penerbit = Penerbit::FindOrFail($id);
        return view('penerbit.edit', compact('penerbit'));
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
        $data = $request->validate([

            'nama_penerbit' => 'required'
           

        ],
        [
            'nama_penerbit.required'=> 'Nama Penerbit harus di isi'
        ]);
        $penerbit = Penerbit::findOrfail($id);
        $penerbit->nama_penerbit     = $request->nama_penerbit;
        $penerbit->save();

        return redirect('penerbit')->with('success', 'Data Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penerbit = Penerbit::findOrfail($id);
        $penerbit->delete();
        return redirect('penerbit')->with('success', 'Data Berhasil Dihapus');
    }
    
}
