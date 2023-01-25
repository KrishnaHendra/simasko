<?php

namespace App\Http\Controllers;       

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login(){
        $data['title'] = 'Login';
        $data['active'] = 'login';
        $data['captcha'] = $this->createCaptchaCode();
        $data['content'] = 'template/templatedark';
        return view('login', $data);
    }

    public function register(){
        $data['title'] = 'Registrasi';
        $data['active'] = 'register';
        $data['content'] = 'template/templatedark';
        return view('register', $data);
    }

    public function createCaptchaCode(){
        $string1    = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $string2    = "1234567890";
        $string     = $string1.$string2;
        $string     = str_shuffle($string);
        // change the number to change number of chars
        $random_text= substr($string,0,8);
        return $random_text;
    }

    public function postLogin(Request $req){
        if(!Auth::attempt(['email' => $req->email, 'password' => $req->password])){
            return response()->json([
                'success' => false,
                'message' => 'Email / Password yang anda masukkan salah!'
            ]);
        }else{
            $user = Auth::user();
            return response()->json([
                'success' => true,
                'message' => 'Login Berhasil',
                'user' => $user,
                'redirect' => 'administrator'
            ]);
        }
    }

    public function postRegister(Request $req){
        $foto_ktp =  $req->file('foto_ktp')->getSize();
        $pas_foto =  $req->file('pas_foto')->getSize();
        $size_ktp = round($foto_ktp/1000000, 2);
        $size_foto = round($pas_foto/1000000, 2);
        $data = [
          'foto_ktp' => $size_ktp,
          'pas_foto' => $size_foto
        ];
        if($size_ktp > 2){
          $data = [
            'status' => false,
            'message' => 'Foto KTP tidak boleh lebih dari 2MB'
          ];
        }else if($size_foto > 2){
          $data = [
            'status' => false,
            'message' => 'Pas Foto tidak boleh lebih dari 2MB'
          ];
        }else{
          $ktp      = $req->file('foto_ktp');
          $pasFoto  = $req->file('pas_foto');

          User::create([
              'id' => $this->getUUID(),
              'name' => $req->nama,
              'email' => $req->email,
              'password' => Hash::make($req->password),
              'role_id' => 4,
              'hp' => $req->hp,
              'foto_ktp' => $ktp->move('images/ktp'),
              'pas_foto' => $pasFoto->move('images/pas_foto'),
              'no_ktp' => $req->no_ktp,
              'kejuruan' => $req->kejuruan,
              'jenis_kelamin' => $req->jenis_kelamin,
              'agama' => $req->agama,
              'tempat_lahir' => $req->tempat_lahir,
              'tgl_lahir' => $req->tgl_lahir,
              'provinsi_id' => $req->provinsi,
              'kota_id' => $req->kota,
              'alamat' => $req->alamat,
              'pendidikan_terakhir' => $req->pendidikan_terakhir,
              'asal_sekolah' => $req->asal_sekolah,
              'status_pernikahan' => $req->status_pernikahan,
              'pekerjaan_id' => $req->pekerjaan
          ]);
          $data = [
            'status' => true,
            'message' => 'Data berhasil disimpan'
          ];
        }
        return response()->json($data);
    }

    public function getUUID(){
      $uuid = DB::select("SELECT uuid() as uuid");
      return $uuid[0]->uuid;
    }

}
