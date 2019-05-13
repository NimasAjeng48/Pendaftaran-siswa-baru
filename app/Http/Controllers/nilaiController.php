<?php

namespace App\Http\Controllers;
use App\nilai;
use App\pendaftaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MyTable\Database\Eloquent\Model;

class nilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilaiku = nilai::with(['get_pendaftaran'])->paginate(8);
        return view('nilai.index',compact('nilaiku'));
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
        $nilaiku=nilai::all();
        return view('nilai.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=nilai::all();
        $nilai = DB::table('nilai')->where('id',$id)->get();
        return view('nilai.edit',compact('edit','nilai'));
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
        DB::table('nilai')->where('id',$request->id)->update([
            'id'=>$request->id,
            'nama'=>$request->nama,
            'nilai_un'=>$request->nilai_un,
            'nilai_raport'=>$request->nilai_raport,
            'nilai_wawancara'=>$request->nilai_wawancara,
            'nilai_mengaji'=>$request->nilai_mengaji,
        ]);
            return redirect('/nilai');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=nilai::find($id);

        $del->delete();

        return redirect('/nilai');
       
    }
}
