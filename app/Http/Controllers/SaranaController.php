<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaranaController extends Controller
{
    public function kantor(){
        //return "Berikut adalah sarana dan prasarana kantor";
        return view('kantor', ['pesanktr' => "Berikut adalah sarana dan prasarana kantor"]);
    }
    public function Laboratorium(){
        //return "Berikut adalah sarana dan prasarana Laboratorium";
        return view('laboratorium', ['pesanlbr' => "Berikut adalah sarana dan prasarana Laboratorium"]);
    }
    public function kelas(){
        //return "Berikut adalah sarana dan prasarana kelas";
        return view('kelas', ['pesankls' => "Berikut adalah sarana dan prasarana kelas"]);
    }
    public function lainnya(){
        //return "Berikut adalah sarana dan prasarana lainnya";
        return view('lainnya', ['pesanlny' => "Berikut adalah sarana dan prasarana lainnya"]);
    }
}
