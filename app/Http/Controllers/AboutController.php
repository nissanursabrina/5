<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about() {
        //return "Jurusan Teknologi Informasi Polinema merupakan Jurusan Teknologi Informasi merupakan salah satu jurusan di Politeknik Negeri Malang, berdasarkan keputusan Direkur Politeknik Negeri Malang nomor 53 tahun 2015 yang terdiri dari Program Studi Diploma III Manajemen Informatika dan Program Studi Diploma IV Teknik Informatika.";
        return view('about', ['message' => "Jurusan Teknologi Informasi Polinema merupakan Jurusan Teknologi Informasi merupakan salah satu jurusan di Politeknik Negeri Malang, berdasarkan keputusan Direkur Politeknik Negeri Malang nomor 53 tahun 2015 yang terdiri dari Program Studi Diploma III Manajemen Informatika dan Program Studi Diploma IV Teknik Informatika."]);
    }
}
