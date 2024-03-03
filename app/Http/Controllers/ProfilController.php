<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function profil(){
        $data = [
            'Nama' => 'Yurisha Anindya',
            'Jenis Kelamin' => 'Perempuan',
            'ttl' => '15 September 2004',
            'Alamat' => 'Batam Center',
            'Email' => 'yurishaanindya154@gmail.com',
            'No HP' => '083186521332',
        ];

        return view('profil', compact('data'));
    }

    public function pembayaran(){

        return view('pembayaran');
    }
}
