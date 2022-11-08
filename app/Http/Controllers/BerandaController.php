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
        if(Auth()->user()->role === 'user'){
            $profileUser = $this->profileUser();

            $profile_data = [
                'NIS' => $profileUser->nis,
                'Nama' => $profileUser->nm_siswa,
                'email' => $profileUser->email,
                'Kelas' => $profileUser->kelas->nm_kelas,
                'Tanggal Lahir' => $profileUser->tgl_lahir,
                'Jenis Kelamin' => $profileUser->jenkel,
                'Nama Ayah' => $profileUser->nm_ayah,
                'Pekerjaan Ayah' => $profileUser->pekerjaan_ayah,
                'No Telepon' => $profileUser->no_tlp,
                'Alamat' => $profileUser->alamat
            ];
    
            $bimbingan_data = Bimbingan::where('nis', $profileUser->nis)->get();
    
            return view('halamandepan.beranda', compact('profile_data','bimbingan_data'));
        } else {
            $beranda = "tani";
            $jumlah_siswa = Siswa::all()->count();
            $jumlah_bimbingan = Bimbingan::all()->count();
            $jumlah_kelas = Kelas::all()->count();
            $jumlah_jenismasalah = JenisMasalah::all()->count();
            $siswa = Siswa::all();

            return view('halamandepan.beranda', compact('beranda', 'siswa'))
            ->with('jumlah_siswa', $jumlah_siswa)
            ->with('jumlah_bimbingan', $jumlah_bimbingan)
            ->with('jumlah_kelas', $jumlah_kelas)
            ->with('jumlah_jenismasalah', $jumlah_jenismasalah);
        }
    }

    public function profileUser()
    {
        $siswa = \App\Siswa::where('email', Auth()->user()->email)->first();
        // dd($siswa);
        return $siswa;
    }
}
