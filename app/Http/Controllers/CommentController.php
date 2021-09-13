<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function comment($nama,$pesan) {
        return "<b>Nama</b> : $nama <br> <b>Pesan</b> : $pesan";
    }
}
