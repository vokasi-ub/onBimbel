<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelmapel;
use Illuminate\Support\Facades\DB;

class MapelController extends Controller
{
    public function mapel(){
        $mapelsiswa = modelmapel::all();
        return view('mapel', compact ('mapelsiswa'));
   }

   public function tambah()
   {
    
       // memanggil view tambah
       return view('master.addmapel');
    
   }
   
   public function tambahmapel(Request $request)
   {
       $request->validate([
           'namaMapel' => 'required'
       ]);
       // insert data ke table pegawai
       modelmapel::insert([
           'namaMapel' => $request->namaMapel
       ]);
       // alihkan halaman ke halaman pegawai
       return redirect('/mapel/index');
    
   }
   
   public function destroy($idJadwal)
   {
       // hapus data
       modeljadwal::where('idJadwal',$idJadwal)->delete();
    
       return redirect('/jadwal/siswa');
   }
}
