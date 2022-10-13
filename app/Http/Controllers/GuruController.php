<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class GuruController extends Controller
{
    public function index()
    {
    	$guru = Guru::all();
    	return view('guru.index',compact('guru'));
    }

    public function tambah()
    {
    	return view('guru.tambah');
    }

    public function store(Request $request)
    {
        Guru::create([
    		'nip' => $request->nip,
    		'nm_jabatan' => $request->nm_jabatan,
            'no_tlp' => $request->no_tlp,
    		'email' => $request->email,
    		'password' => bcrypt($request->password),
    	]);
 
    	return redirect('/guru');
    }

    public function detail($id)
    {
        $guru = Guru::where('nip',$id)->first();
        return view('guru.detail',compact('guru'));
    }

    public function edit($id)
    {
        $guru = Guru::where('nip',$id)->first();
        return view('guru.edit',compact('guru'));
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
        'nip' => 'required',
        'nm_jabatan' => 'required',
        'no_tlp' => 'required',
        'email' => 'required',
        'password' => 'required',
        ]);

    
        Guru::where('nip',$id)->update([
            'nip' => $request->nip,
    		'nm_jabatan' => $request->nm_jabatan,
            'no_tlp' => $request->no_tlp,
    		'email' => $request->email,
    		'password' => bcrypt($request->password),
        ]);

        return redirect('/guru');
    }

    public function delete($id)
    {
        Guru::where('nip',$id)->delete();
        return redirect('/guru');
    }
}
