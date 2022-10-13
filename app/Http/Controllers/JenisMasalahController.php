<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\JenisMasalah;
use App\Bimbingan;

class JenisMasalahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenismasalah = JenisMasalah::all();
    	return view('jenismasalah.index',compact('jenismasalah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view('jenismasalah.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        JenisMasalah::create([
    		'nm_masalah' => $request->nm_masalah

    	]);
 
    	return redirect('/jenismasalah');
    }

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
        $jenismasalah = JenisMasalah::where('id_masalah',$id)->first();
        return view('jenismasalah.edit',compact('jenismasalah'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nm_masalah' => 'required'
    
            ]);
    
        
            JenisMasalah::where('id_masalah',$id)->update([
                'nm_masalah' => $request->nm_masalah
    
            ]);
    
            return redirect('/jenismasalah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        JenisMasalah::where('id_masalah',$id)->delete();
        return redirect('/jenismasalah');
    }
}
