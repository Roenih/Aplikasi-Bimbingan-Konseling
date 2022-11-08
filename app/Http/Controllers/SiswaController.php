<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;

class SiswaController extends Controller
{
    public function index()
    {
    	$siswa = Siswa::select('*')->orderBy('created_at','DESC')->get();
    	return view('siswa.index',compact('siswa'));
    }
    public function tambah()
    {
        $kelas = \App\Kelas::all();
    	return view('siswa.tambah', compact('kelas'));
    }

    public function store(Request $request)
    {
    	// $this->validate($request,[
    	// 	'nis' => 'required',
    	// 	'nm_siswa' => 'required',
        //     'kode_siswa' => 'required',
        //     'tgl_siswa' => 'required',
        //     'jenkel' => 'required',
        //     'nm_ayah' => 'required',
        //     'pekerjaan_ayah' => 'required',
        //     'alamat' => 'required',
        //     'no_tlp' => 'required',
        //     'email' => 'required',
    	// ]);
 
        Siswa::create($request->all());
 
    	return redirect('/siswa')->with('Data ditambah','Data berhasil ditambah!');
    }
    
    public function detail($id)
    {
        $kelas = \App\Kelas::all();
        $siswa = Siswa::where('nis',$id)->first();
        return view('siswa.detail',compact('siswa','kelas'));
    }

    public function edit($id)
    {
        $kelas = \App\Kelas::all();
        $siswa = Siswa::where('nis',$id)->first();
        return view('siswa.edit',compact('siswa','kelas'));
    }

    public function update($id, Request $request)
    {
        // $this->validate($request,[
        // 'nis' => 'required',
        // 'nm_siswa' => 'required',
        // 'kode_kelas' => 'required',
        // 'tgl_lahir' => 'required',
        // 'jenkel' => 'required',
        // 'nm_ayah' => 'required',
        // 'pekerjaan_ayah' => 'required',
        // 'no_tlp' => 'required',
        // 'alamat' => 'required',
        // 'email' => 'required',

        // ]);
    
        Siswa::where('nis',$id)->update([
        'nis' => $request->nis,
        'nm_siswa' => $request->nm_siswa,
        'kode_kelas' => $request->kode_kelas,
        'tgl_lahir' => $request->tgl_lahir,
        'jenkel' => $request->jenkel,
        'nm_ayah' => $request->nm_ayah,
        'pekerjaan_ayah' => $request->pekerjaan_ayah,
        'no_tlp' => $request->no_tlp,
        'alamat' => $request->alamat,
        'email' => $request->email,
        ]);

        return redirect('/siswa')->with('Data diedit','Data berhasil diedit!');
    }

    public function delete($id)
    {
        Siswa::where('nis',$id)->delete();
        return redirect('/siswa')->with('Data dihapus','Data berhasil dihapus!');
    }

    public function TampilanCetak()
    {
        return view('siswa.cetak-siswa');
        
    }
    
}