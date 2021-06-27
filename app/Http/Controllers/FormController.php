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
        $form = \App\Models\Form::all();
        return view('formpeminjaman', ['form' => $form]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('FormPeminjaman');
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
        \App\Models\Form::create([
            'id_form' => $request->get('id_form'),
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

          return redirect('/form');
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
}
