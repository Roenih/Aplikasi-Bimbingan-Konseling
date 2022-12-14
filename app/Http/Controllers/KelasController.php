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
            'nm_kelas' => 'required'
            ]);
        
        $check = $request->nm_kelas;

        $code = 'KLS'.str_replace("-", "", $check);

        Kelas::create([
    		'kode_kelas' => $code,
    		'nm_kelas' => $request->nm_kelas,
    	]);
 
    	return redirect('/kelas')->with('Data ditambah','Data berhasil ditambah!');
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
        'nm_kelas' => 'required'
        ]);

        $check = $request->nm_kelas;

        $code = 'KLS'.str_replace("-", "", $check);
    
        Kelas::where('kode_kelas',$id)->update([
            'kode_kelas' => $code,
    		'nm_kelas' => $request->nm_kelas,

        ]);

        return redirect('/kelas')->with('Data diedit','Data berhasil diedit!');
    }

    public function delete($id)
    {
        Kelas::where('kode_kelas',$id)->delete();
        return redirect('/kelas')->with('Data dihapus','Data berhasil dihapus!');
    }
}
