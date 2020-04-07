<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function index() {
        $nama = 'Husnul Hotimah'; //ubah dengan nama kalian
        $matkul= ["Pemrograman Web Lanjut", "Analis & Desain Berorirentasi Objek", 
        "Sistem Manajemen Basis Data","Sistem Informasi", "Manajemen proyek", "Proyek",
        "Komputasi kognitif"];
        return view('biodata' , ['nama' => $nama, 'matkul' =>
        $matkul]);
        }
        
}
