<?php

namespace App\Http\Controllers;
use App\wali;
use Illuminate\Http\Request;

class walisiswaController extends Controller
{
    public function create()
    {
        return view('wali.tambah');
    }

    public function store(Request $request)
    {
        $data= new wali();

        $data->nis=$request->nis;
        $data->nama_pendaftaran =$request->nama_pendaftaran;
        $data->nama_wali=$request->nama_wali;
        $data->alamat_wali=$request->alamat_wali;
        $data->pekerjaan_wali=$request->pekerjaan_wali;
        $data->gaji_wali=$request->gaji_wali;
        
        $data->save();

        if($request->tags){
            $post->tags()->attach($request->tags);
        }
        session()->flash('completed','Data telah tersimpan');
        
        return redirect('/home');
    }
}
