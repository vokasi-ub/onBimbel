<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modeljadwal;
use Illuminate\Support\Facades\DB;

class JadwalController extends Controller
{
    public function jadwal(){
        $jadwalsiswa = modeljadwal::all();
        return view('jadwal', compact ('jadwalsiswa'));
   }

   public function tambah()
{
 
	// memanggil view tambah
	return view('master.addjadwal');
 
}

public function tambahjadwal(Request $request)
{
	$request->validate([
		'Hari' => 'required',
		'Jam' => 'required'
	]);
	// insert data ke table pegawai
	modeljadwal::insert([
		'Hari' => $request->Hari,
		'Jam' => $request->Jam
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/jadwal/index');
 
}

public function destroy($idJadwal)
{
	// hapus data
	modeljadwal::where('idJadwal',$idJadwal)->delete();
 
    return redirect('/jadwal/siswa');
}

}
