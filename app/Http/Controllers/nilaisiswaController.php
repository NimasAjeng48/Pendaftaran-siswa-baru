<?php

namespace App\Http\Controllers;
use App\nilai;
use App\pendaftaran;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class nilaisiswaController extends Controller
{
    public function create()
    {
       
       $nilaiku = nilai::all();
       return view('nilai.index', compact('nilaiku'));
    }

    public function store(Request $request)
    {
       DB::table('nilai')->insert([
       'id'=>$request->id,
       'pendaftaran_id'=>$request->pendaftaran_id,
       'nama'=>$request->nama,
       'nilai_un'=>$request->nilai_un,
       'nilai_raport'=>$request->nilai_raport,
       'nilai_wawancara'=>$request->nilai_wawancara,
       'nilai_mengaji'=>$request->nilai_mengaji
        
       ]);

        if($request->tags){
            $post->tags()->attach($request->tags);
        }
        session()->flash('completed','Data telah tersimpan');
        // alihkan halaman ke halaman 
        return redirect('/formwali'); 
    }
}
