<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bimbingan;
use App\JenisMasalah;
use App\Kelas;
use App\Siswa;
use PDF;

class BimbinganController extends Controller
{
    public function index()
    {
    	$bimbingan = Bimbingan::all();
        // dd($bimbingan);
    	return view('bimbingan.index',compact('bimbingan'));
    }

    public function tambah()
    {
        $jenismasalah = \App\JenisMasalah::all();
        $kelas = \App\Kelas::all();
        $siswa = \App\Siswa::all();
    	return view('bimbingan.tambah', compact('jenismasalah', 'kelas', 'siswa'));
    }

    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'nis' => 'required|string|unique:bimbingans,nis',
        //     'nm_siswa' => 'required',
        //     // 'nm_kelas' => 'required',
        //     'tgl_konsultasi' => 'required',
        //     // 'kode_kelas' => 'required',
        //     'jenis_masalah' => 'required',
        //     'diskripsi_bimbingan' => 'required',
        //     'penyelesaian' => 'required'
        //     ]);

        Bimbingan::create([
    		'nis' => $request->nis,
    		'nm_siswa' => $request->nm_siswa,
            'nm_kelas' => $request->nm_kelas,
            'tgl_konsultasi' => $request->tgl_konsultasi,
            // 'kode_kelas' => $request->kode_kelas,
            'jenis_masalah' => $request->jenis_masalah,
    		'diskripsi_bimbingan' => $request->diskripsi_bimbingan,
            'penyelesaian' => $request->penyelesaian,

    	]);
 
    	return redirect('/bimbingan');
    }

    public function detail($id)
    {
        $bimbingan = Bimbingan::where('id_bimbingan',$id)->first();
        return view('bimbingan.detail',compact('bimbingan'));
    }

    public function edit($nis)
    {
        $jenismasalah = \App\JenisMasalah::all();
        $kelas = \App\Kelas::all();
        $siswa = \App\Siswa::all();
        $bimbingan = Bimbingan::where('id_bimbingan',$nis)->first();
        return view('bimbingan.edit',compact('bimbingan', 'jenismasalah','kelas','siswa'));
    }

    public function update(Request $request, $id)
    {
        // $this->validate($request,[
        // 'nis' => 'required',
        // 'nm_siswa' => 'required',
        // // 'nm_kelas' => 'required',
        // 'tgl_konsultasi' => 'required',
        // 'kode_kelas' => 'required',
        // 'jenis_masalah' => 'required',
        // 'diskripsi_bimbingan' => 'required',
        // 'penyelesaian' => 'required'
        // ]);

    
        Bimbingan::where('id_bimbingan',$id)->update([
            'nis' => $request->nis,
            'nm_kelas' => $request->nm_kelas,
            'tgl_konsultasi' => $request->tgl_konsultasi,
            // 'kode_kelas' => $request->kode_kelas,
            'jenis_masalah' => $request->jenis_masalah,
    		'diskripsi_bimbingan' => $request->diskripsi_bimbingan,
            'penyelesaian' => $request->penyelesaian,
        ]);

        return redirect('/bimbingan');
    }

    public function delete($id)
    {
        Bimbingan::where('id_bimbingan',$id)->delete();
        return redirect('/bimbingan');
    }

    public function CetakBimbingan()
    {
        $siswa = Siswa::all();
        return view('Bimbingan.cetak-bimbingan',compact('siswa'));
    }

    public function CetakPdfBimbingan()
    {

    	$bimbingan = Bimbingan::all();
 
    	$pdf = PDF::loadview('Bimbingan.bimbingan_pdf',compact('bimbingan'));
    	return $pdf->stream();
    }

    public function CetakPDFTanggal(Request $request)
    {
        $start = $request->start;
        $end = $request->end;

        $bimbingan = Bimbingan::where('tgl_konsultasi','>=',$start)
                                ->where('tgl_konsultasi','<=',$end)
                                ->orderBy('tgl_konsultasi')
                                ->get();
    	$pdf = PDF::loadview('Bimbingan.bimbingan_pdf',compact('bimbingan'));
    	return $pdf->stream();
    }
}
