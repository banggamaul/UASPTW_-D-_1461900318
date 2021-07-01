<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index () {
        $data = array('title' => 'Belanja nih');
        return view('homepage.index', $data);
    }
    // public function daftar () {
    //     $data = array('title' => 'daftar akun');
    //     return view('homepage.daftar', $data);
    // }
    public function kontak() {
        $data = array('title' => 'Kontak Kami');
        return view('homepage.kontak', $data);
    }
    public function pria() {
        $data = array('title' => 'Katalog Pria');
        return view('homepage.pria', $data);
    }
    public function wanita() {
        $data = array('title' => 'katalog Wanita');
        return view('homepage.wanita', $data);
    }
    public function anak() {
        $data = array('title' => 'kaitalog Anak-anak');
        return view('homepage.anak', $data);
    }
}
