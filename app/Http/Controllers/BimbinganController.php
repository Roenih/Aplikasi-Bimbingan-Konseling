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
    		// 'nm_siswa' => $request->nm_siswa,
            'nm_kelas' => $request->nm_kelas,
            'tgl_konsultasi' => $request->tgl_konsultasi,
            // 'kode_kelas' => $request->kode_kelas,
            'id_masalah' => $request->id_masalah,
    		'diskripsi_bimbingan' => $request->diskripsi_bimbingan,
            'penyelesaian' => $request->penyelesaian,

    	]);
 
    	return redirect('/bimbingan')->with('Data ditambah','Data berhasil ditambah!');
    }

    public function tambahUser()
    {
        $jenismasalah = \App\JenisMasalah::all();
    	return view('bimbingan.tambah-user', compact('jenismasalah'));
    }

    public function storeUser(Request $request)
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

        $check_siswa = Siswa::where('email', Auth()->user()->email)->first();

        Bimbingan::create([
            'nis' => $check_siswa->nis,
            'nm_kelas' => $check_siswa->kode_kelas,
            'tgl_konsultasi' => $request->tgl_konsultasi,
            'id_masalah' => $request->id_masalah,
            'diskripsi_bimbingan' => $request->diskripsi_bimbingan,
            'penyelesaian' => $request->penyelesaian,
        ]);
        return redirect('/tambah-bimbingan-user')->with('Data ditambah','Data berhasil ditambah!');
    }

    public function detail($id)
    {
        $bimbingan = Bimbingan::where('id_bimbingan',$id)->first();
        return view('bimbingan.detail',compact('bimbingan'));
    }

    public function checkKelas($kelas){
        $check = \App\Siswa::where('nis',$kelas)->first();

        $kelas = \App\Kelas::where('kode_kelas',$check->kode_kelas)->first();

        return response()->json($kelas);
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
            'id_masalah' => $request->id_masalah,
    		'diskripsi_bimbingan' => $request->diskripsi_bimbingan,
            'penyelesaian' => $request->penyelesaian,
        ]);

        return redirect('/bimbingan')->with('Data diedit','Data berhasil diedit!');
    }

    public function delete($id)
    {
        Bimbingan::where('id_bimbingan',$id)->delete();
        return redirect('/bimbingan')->with('Data dihapus','Data berhasil dihapus!');
    }

    public function CetakBimbingan()
    {
        $siswa = Siswa::all();
        $bimbingan = Bimbingan::all();
        // dd($bimbingan);
        return view('Bimbingan.cetak-bimbingan',compact('siswa','bimbingan'));
    }

    public function CetakPerBimbingan(Request $request)
    {
        $test = $request->id_bimbingan;
        // dd($test);
        $bimbingan = Bimbingan::where('id_bimbingan',$test)->get();
        // dd($bimbingan);

        $pdf = PDF::loadview('Bimbingan.bimbingan_pdf',compact('bimbingan'));
    	return $pdf->stream();
    }

    public function CetakSiswaAll() {
        $siswa = Siswa::all();

        $pdf = PDF::loadview('Bimbingan.cetak-siswa',compact('siswa'));
    	return $pdf->stream();
    }

    public function CetakPerSiswa(Request $request)
    {
        $test = $request->nis;
        // dd((int) $test);
        $siswa = Siswa::where('nis',$test)->get();

        // dd($siswa);
        $pdf = PDF::loadview('Bimbingan.cetak-siswa',compact('siswa'));
    	return $pdf->stream();
    }

    public function CetakPdfBimbingan()
    {
    	$bimbingan = Bimbingan::all();

        // dd($bimbingan);
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
