<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){ //index() {
        //return "Selamat Datang di Website Politenik Negeri Malang";
        return view('home', ['pesan' => "Selamat Datang di Website Politenik Negeri Malang"]);
    }
}
