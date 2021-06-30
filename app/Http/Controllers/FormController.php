<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $form = \App\Models\formpinjams::all();
        return view('formpeminjaman', ['form' => $form]);

    }

    public function indexx()
    {
        $lform = \App\Models\formpinjams::all();
        return view('listform', ['lform' => $lform]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('formpeminjaman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        \App\Models\formpinjams::create([
            'nama_peminjam' => $request->get('nama_peminjam'),
            'nrp' => $request->get('nrp'),
            'fakultas' => $request->get('fakultas'),
            'departemen' => $request->get('departemen'),
            'alamat_rumah' => $request->get('alamat_rumah'),
            'alamat_sby' => $request->get('alamat_sby'),
            'nohp' => $request->get('nohp'),
            'email' => $request->get('email'),
            'tanggal_pinjam' => $request->get('tanggal_pinjam'),
            'tanggal_kembali' => $request->get('tanggal_kembali'),
          ]);

          return redirect('/');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function read($id)
    {
        //
        $konf = DB::table('formpinjams')->where('kode_sepeda',$id)->get();
        return view('konfirmasiform',['konf' => $konf]);
    }
}
