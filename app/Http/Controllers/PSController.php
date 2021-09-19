<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PSController extends Controller
{
    public function ti(){
        //return "Selamat datang di Program Studi Teknik Informatika";
        return view('ti', ['pesanti' => "Selamat datang di Program Studi Teknik Informatika"]);
    }
    public function mi(){
        //return "Selamat datang di Program Studi Manajemen Informatika";
        return view('mi', ['pesanmi' => "Selamat datang di Program Studi Manajemen Informatika"]);
    }
}
