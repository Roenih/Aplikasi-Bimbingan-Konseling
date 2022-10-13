<?php

namespace App\Http\Controllers;
use App\Beranda;
use App\Siswa;
use App\Guru;
use App\Bimbingan;
use App\Kelas;
use App\JenisMasalah;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $beranda = "tani";
        $jumlah_siswa = Siswa::all()->count();
        $jumlah_guru = Guru::all()->count();
        $jumlah_bimbingan = Bimbingan::all()->count();
        $jumlah_kelas = Kelas::all()->count();
        $siswa = Siswa::all();

        return view('halamandepan.beranda', compact('beranda', 'siswa'))
        ->with('jumlah_siswa', $jumlah_siswa)
        ->with('jumlah_guru', $jumlah_guru)
        ->with('jumlah_bimbingan', $jumlah_bimbingan)
        ->with('jumlah_kelas', $jumlah_kelas);

        

        // return view('halamandepan.beranda');
    }
}