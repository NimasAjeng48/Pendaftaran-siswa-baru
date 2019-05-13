<?php

namespace App\Http\Controllers;
use App\pendaftaran;
use App\nilai;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use MyTable\Database\Eloquent\Model;

class pendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $pendaftaranku = pendaftaran::all();
       return view('pendaftaran.index', ['pendaftaran' => $pendaftaranku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        //mengambil data pegawai berdasarkan id yang dipilih
        $pendaftaranku = pendaftaran::find($id);
        return view('pendaftaran.edit')->with('pendaftaran',$pendaftaranku);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $updateDaftar=pendaftaran::find($id);

        $updateDaftar->id=$request->id;
        $updateDaftar->nis=$request->nis;
        $updateDaftar->nama=$request->nama;
        $updateDaftar->asal_sekolah=$request->asal_sekolah;
        $updateDaftar->tahun_ajaran=$request->tahun_ajaran;
        
        $updateDaftar->save();
        //update data

        //mengalihkan halaman ke halaman pendaftaran
        return redirect('/pendaftaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=pendaftaran::find($id);

        $del->delete();

        return redirect('/pendaftaran');
    }
}
