<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_buku = \App\Buku::where('judul','LIKE', '%'. $request->cari . '%')->get();
        }else{
            $data_buku = \App\Buku::all();
        }
        return view('buku.index', ['data_buku' => $data_buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Buku::create($request->all());
        return redirect('/buku')->with('sukses', 'Data buku berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_buku)
    {
        $buku = \App\Buku::find($id_buku);
        return view('buku.edit', ['buku' => $buku]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_buku)
    {
        $buku = \App\Buku::find($id_buku);
        $buku->update($request->all());
        $request->validate([
            'gambar' => 'nullable',
        ]);
        return redirect('/buku')->with('sukses', 'Data buku berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_buku)
    {
        $buku = \App\Buku::find($id_buku);
        $buku->delete();
        return redirect('/buku')->with('sukses', 'Data buku berhasil dihapus');
    }
}
