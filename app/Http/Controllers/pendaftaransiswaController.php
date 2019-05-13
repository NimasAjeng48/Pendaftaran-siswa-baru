<?php

namespace App\Http\Controllers;
use App\pendaftaran;
use Illuminate\Http\Request;

class pendaftaransiswaController extends Controller
{
    public function create()
    {
        return view('nilai.tambah');
    }

    public function store(Request $request)
    {
        $data= new pendaftaran();

        $data->nis=$request->nis;
        $data->nama=$request->nama;
        $data->jk=$request->jk;
        $data->alamat=$request->alamat;
        $data->email=$request->email;
        $data->asal_sekolah=$request->asal_sekolah;
        $data->tahun_ajaran=$request->tahun_ajaran;
        $data->tempat_lahir=$request->tempat_lahir;
        $data->tanggal_lahir=$request->tanggal_lahir;
        $data->telepon=$request->telepon;


        $data->save();
        if($request->tags){
            $post->tags()->attach($request->tags);
        }
        session()->flash('completed','Data telah tersimpan,');

        return redirect('/diri');
    }
}
