<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modellogin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        if(!Session::get('login')){
            return redirect('login')->with('alert','Kamu harus login dulu');
        }
        else{
            return view('login');
        }
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){

        $username = $request->username;
        $password = $request->password;

        $data = modellogin::where('username',$username)->first();
        if($data){ //apakah email tersebut ada atau tidak
       //     if(Hash::check($password,$data->password)){
         //       return redirect('/datasiswa/index');
         if($password==$data->password){
             return redirect('/datasiswa/index');
            }
            else{
                return redirect('/bimbleonline')->with('alert','Password atau Email, Salah !');
            }
        }
        else{
            return redirect('/bimbleonline')->with('alert','Password atau Email, Salah!');
        }
    }

    public function logout(){
        Session::flush();
        return redirect('/bimbleonline');
    }

    public function register(Request $request){
        return view('register');
    }

    public function registerPost(Request $request){
        $this->validate($request, [
            'name' => 'required|min:4',
            'email' => 'required|min:4|email|unique:users',
            'password' => 'required',
            'confirmation' => 'required|same:password',
        ]);

        $data =  new ModelUser();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect('login')->with('alert-success','Kamu berhasil Register');
    }
}
