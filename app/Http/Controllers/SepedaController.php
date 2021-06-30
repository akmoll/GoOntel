<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SepedaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sepeda = \App\Models\listsepeda::all();
        return view('viewsepedas', ['allSepedas' => $sepeda]);
    }

    public function indexx()
    {
        $sepeda = \App\Models\listsepeda::all();
        return view('detailsepeda', ['allSepedas' => $sepeda]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createsepeda');
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
        \App\Models\listsepeda::create([
            'kode_sepeda' => $request->get('kode_sepeda'),
            'merk_sepeda' => $request->get('merk_sepeda'),
            'kualitas_sepeda' => $request->get('kualitas_sepeda'),
            'jenis_sepeda' => $request->get('jenis_sepeda'),
            'warna_sepeda' => $request->get('warna_sepeda'),
            'harga_sepeda' => $request->get('harga_sepeda'),
          ]);

          return redirect('/sepeda');
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
         //hapus data sepeda berdasar id yang dipilih
         DB::table('listsepeda')->where('kodesepeda', $id)->delete();
         DB::table('detailsepeda')->where('kode_sepeda', $id)->delete();

         //alihkan ke halaman pendapatan
         return redirect('/sepeda');
    }


    public function read($id)
    {
        //
        $detail = DB::table('listsepedas')->where('kode_sepeda',$id)->get();
        return view('detailsepeda',['detail' => $detail]);
    }

}
