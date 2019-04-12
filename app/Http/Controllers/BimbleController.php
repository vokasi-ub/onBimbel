<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelbimble;
use Illuminate\Support\Facades\DB;

class BimbleController extends Controller
{
    public function index(){
        $bimblesiswa = modelbimble::all();
        return view('index', compact ('bimblesiswa'));
   }

   public function cari(Request $request)
   {
	   // menangkap data pencarian
	   $cari = $request->cari;

		   // mengambil data dari table pegawai sesuai pencarian data
	   $bimblesiswa = DB::table('tb_siswa')
	   ->where('namaSiswa','like',"%".$cari."%")
	   ->paginate();

		   // mengirim data pegawai ke view index
	   return view('index',['bimblesiswa' => $bimblesiswa]);

   }

   // hapus sementara
public function destroy($idSiswa)
{
	// hapus data
	modelbimble::where('idSiswa',$idSiswa)->delete();
 
    return redirect('/datasiswa/index');
}


public function edit($idSiswa)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$bimblesiswa = DB::table('tb_siswa')->where('idSiswa',$idSiswa)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('master.edit',['bimblesiswa' => $bimblesiswa]);
 
}
public function update(Request $request)
{
	// update data pegawai
	DB::table('tb_siswa')->where('idSiswa',$request->idSiswa)->update([
		'namaSiswa' => $request->namaSiswa,
		'Alamat' => $request->Alamat,
        'noTelf' => $request->noTelf,
        'kelas' => $request->kelas
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/datasiswa/index');
}


// method untuk menampilkan view form tambah pegawai
public function tambah()
{
 
	// memanggil view tambah
	return view('master.tambah');
 
}

public function tambahsiswa(Request $request)
{
	$request->validate([
		'namaSiswa' => 'required',
		'Alamat' => 'required',
        'noTelf' => 'required',
        'kelas' => 'required'
	]);
	// insert data ke table pegawai
	modelbimble::insert([
		'namaSiswa' => $request->namaSiswa,
		'Alamat' => $request->Alamat,
        'noTelf' => $request->noTelf,
        'kelas' => $request->kelas
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/datasiswa/index');
 
}

}