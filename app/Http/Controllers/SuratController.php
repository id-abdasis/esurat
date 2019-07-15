<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Session;
use DB;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('tambah-surat');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah-surat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \App\Surat::create($request->all());
        Session::flash('success', "Data Surat Berhasil Ditambahkan");
        return redirect('tambah-surat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public  function daftar_surat(){
        $data_surat = \App\Surat::all();
        return view('daftar-surat', ['data_surat' => $data_surat]);
    }


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
        $surat = \App\Surat::find($id);
        return view('edit-surat', ['surat' => $surat]);
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
//        DB::table('surat')->where('id', $request->$id)->update($request->except('_token', 'id'));
        \App\Surat::where('id', $id)->update($request->except('_token', 'id'));
        return redirect('daftar-surat');
//        return($request->except('_token'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        \App\Surat::find($id)->delete();
        return redirect('daftar-surat');
    }
}
