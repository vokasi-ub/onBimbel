<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelbimble;
use Illuminate\Support\Facades\DB;

class BimbleController extends Controller
{
    public function index(){
        $bimbelsiswa = modelbimble::all();
        return view('index', compact ('bimbelsiswa'));
   }

   // hapus sementara
public function destroy($id)
{
        DB::table('tb_siswa')->where('id',$id)->detele();
        return redirect('bimbleonline');

}
}