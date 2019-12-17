<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Booking::all();
        return view('booking')->with('booking', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambahBooking');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'id_customer'=>'required',
        //     'id_mobil',
        //     'tanggal_pinjam',
        //     'jadwal_kembali',
        //     'tanggal_dikembalikan',
        // ]);
        echo $request->id_customer;
        echo $request->id_mobil;
        echo $request->tanggal_pinjam;
        echo $request->jadwal_kembali;
        echo $request->tanggal_dikembalikan;
        
        
        $booking = new Booking([
            'id_customer' => $request->id_customer,
            'id_mobil' => $request->id_mobil,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'jadwal_kembali' => $request->jadwal_kembali,
            'tanggal_dikembalikan' => $request->tanggal_dikembalikan,
        ]);
            
        $booking->save();
        echo "halo";
        echo $request->id_customer;
        echo $request->id_mobil;
        echo $request->tanggal_pinjsam;
        echo $request->jadwal_kembali;
        echo $request->tanggal_dikembalikan;
        die();
        return redirect('booking');
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
        $data = Booking::where('id_booking', '=', $id)->firstOrFail();
        return view('editBooking')->with('booking', $data);
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
            'id_customer'=>'required',
            'id_mobil',
            'tanggal_pinjam',
            'jadwal_kembali',
            'tanggal_dikembalikan',
        ]);
        $data = [
            'id_customer' => $request->id_customer,
            'id_mobil' => $request->id_mobil,
            'tanggal_pinjam' => $request->tanggal_pinjam,
            'jadwal_kembali' => $request->jadwal_kembali,
            'tanggal_dikembalikan' => $request->tanggal_dikembalikan,
        ];
        Booking::where('id_booking', $id)->update($data);
        return redirect('booking');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::where('id_booking', $id)->delete();
        return redirect('booking');
    }
}
