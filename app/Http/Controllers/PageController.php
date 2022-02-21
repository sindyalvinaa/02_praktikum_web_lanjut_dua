<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return "Selamat Datang";
    }
    public function about(){
        return "Nim : 2041720003, Nama : Sindy Alvina Khoiriyah, Kelas : TI 2D";
    }
    public function articles($id){
        return "Halaman Artikel dengan ID ".$id;
    }
}
