<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kategori::all();
        return view('kategori')->with('kategori', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kategori_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kategori'=>'required',
            'biaya_harian'=>'required',
            'denda_perjam'=>'required'
        ]);
        $kategori = new Kategori([
            'nama_kategori' => $request->input('nama_kategori'),
            'biaya_harian' => $request->input('biaya_harian'),
            'denda_perjam' => $request->input('denda_perjam')
        ]);
        $kategori->save();
        return redirect('kategori');
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
    public function edit($id)
    {
        $data = Kategori::where('nama_kategori', '=', $id)->firstOrFail();
        return view('kategori_edit')->with('kategori', $data);
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
        $request->validate(['nama_kategori'=>'required',
        'biaya_harian'=>'required','denda_perjam'=>'required']);
        $data = ['nama_kategori'=> $request->input('nama_kategori'),
        'biaya_harian'=> $request->input('biaya_harian'),
        'denda_perjam'=> $request->input('denda_perjam')];

        Kategori::where('nama_kategori', $id)->update($data);
        return redirect('kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Kategori::where('nama_kategori', $id)->delete();
        return redirect('kategori');
    }
}
