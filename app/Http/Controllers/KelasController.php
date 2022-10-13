<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class KelasController extends Controller
{
    public function index()
    {
    	$kelas = Kelas::all();
    	return view('kelas.index',compact('kelas'));
    }

    public function tambah()
    {
    	return view('kelas.tambah');
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'kode_kelas' => 'required',
            'nm_kelas' => 'required'
    
            ]);
            
        Kelas::create([
    		'kode_kelas' => $request->kode_kelas,
    		'nm_kelas' => $request->nm_kelas,

    	]);
 
    	return redirect('/kelas');
    }

    public function detail($id)
    {
        $kelas = Kelas::where('kode_kelas',$id)->first();
        return view('kelas.detail',compact('kelas'));
    }

    public function edit($id)
    {
        $kelas = Kelas::where('kode_kelas',$id)->first();
        return view('kelas.edit',compact('kelas'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
        'kode_kelas' => 'required',
        'nm_kelas' => 'required'

        ]);

    
        Kelas::where('kode_kelas',$id)->update([
            'kode_kelas' => $request->kode_kelas,
    		'nm_kelas' => $request->nm_kelas,

        ]);

        return redirect('/kelas');
    }

    public function delete($id)
    {
        Kelas::where('kode_kelas',$id)->delete();
        return redirect('/kelas');
    }
}
