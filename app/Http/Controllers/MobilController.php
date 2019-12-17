<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mobil;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Mobil::all();
        return view('mobil')->with('mobil', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mobil_tambah');
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
            'nama_mobil'=>'required',
            'tahun_produksi'=>'required',
            'no_plat'=>'required',
            'warna'=>'required',
        ]);
        
        $mobil=Mobil::create($request->all());
    
        $mobil->save();
        return redirect('mobil');
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
        $data = Mobil::where('id_mobil', '=',$id)->firstOrFail();
       return view('mobil_edit')->with('mobil', $data);
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
        $request->validate([
            'nama_kategori'=>'required',
            'nama_mobil'=>'required',
            'tahun_produksi'=>'required',
            'no_plat'=>'required',
            'warna'=>'required',
        ]);
        
        $mobil=Mobil::create($request->all());
    
        $data = Mobil::where('id_mobil', '=',$id)->firstOrFail();
        Mobil::where('id_mobil', $id)->update($data->toArray());
        return redirect('mobil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mobil::where('id_mobil',$id)->delete();
        return redirect('mobil');
    }
}
