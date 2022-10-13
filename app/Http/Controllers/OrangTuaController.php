<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrangTua;

class OrangTuaController extends Controller
{
    public function index()
    {
    	$OrangTua = OrangTua::all();
    	return view('OrangTua.index',compact('OrangTua'));
    }

    public function tambah()
    {
    	return view('OrangTua.tambah');
    }

    public function store(Request $request)
    {
        OrangTua::create([
    		'nm_wali' => $request->nm_wali,
    		'no_tlp' => $request->no_tlp,
            'pekerjaan_wali' => $request->pekerjaan_wali,
            'alamat' => $request->alamat,
    	]);
 
    	return redirect('/OrangTua');
    }

    public function detail($id)
    {
        $OrangTua = OrangTua::where('id',$id)->first();
        return view('OrangTua.detail',compact('OrangTua'));
    }
    public function edit($id)
    {
        $OrangTua = OrangTua::where('id',$id)->first();
        return view('OrangTua.edit',compact('OrangTua'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
        'nm_wali' => 'required',
        'no_tlp' => 'required',
        'pekerjaan_wali' => 'required',
        'alamat' => 'required'

        ]);

    
        OrangTua::where('id',$id)->update([
        'nm_wali' => $request->nm_wali,
        'no_tlp' => $request->no_tlp,
        'pekerjaan_wali' => $request->pekerjaan_wali,
        'alamat' => $request->alamat
        ]);

        return redirect('/OrangTua');
    }

    public function delete($id)
    {
        OrangTua::where('id',$id)->delete();
        return redirect('/OrangTua');
    }
}
