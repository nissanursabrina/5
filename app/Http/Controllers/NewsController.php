<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news($num_news){ //,$news) {
        //return "<b>News</b> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp : $num_news <br> <b>News Explanation</b> : $news";
        return view('news', ['num_news' => $num_news]);
    }
}
