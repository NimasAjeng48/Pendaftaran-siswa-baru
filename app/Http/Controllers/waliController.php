<?php

namespace App\Http\Controllers;
use App\wali;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class waliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $waliku=wali::all();
        return view ('wali.index',['wali' => $waliku]);
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
        $edit=wali::find($id);
        return view('wali.edit',['wali'=>$edit]);
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

        $updateWali=wali::find($id);

        $updateWali->nis=$request->nis;
        $updateWali->nama_pendaftaran =$request->nama_pendaftaran;
        $updateWali->nama_wali=$request->nama_wali;
        $updateWali->alamat_wali=$request->alamat_wali;
        $updateWali->pekerjaan_wali=$request->pekerjaan_wali;
        $updateWali->gaji_wali=$request->gaji_wali;
        
        $updateWali->save();
        
         //mengalihkan halaman ke halaman nilai
         return redirect('/wali');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=wali::find($id);

        $del->delete();

        return redirect('/wali');
    }
}
