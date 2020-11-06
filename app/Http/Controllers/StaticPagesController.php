<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function index(){
        $title = 'Selamat datang di website 2ndhand!';
        return view('static.index')->with('title', $title);
    }

    public function about(){
        $data = array(
            'title' => 'Tentang kami',
            'services' => ['jual', 'beli', 'perbaikan']
        );
        return view('static.about')->with($data);
    }
}
