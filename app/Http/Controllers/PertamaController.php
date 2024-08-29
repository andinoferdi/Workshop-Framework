<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PertamaController extends Controller
{
    public function satu(){
        echo "Tampilkan function satu";
    }
    public function dua(){
        return view ('halaman');
    }
    public function tiga($id){
        echo "Parameter 1" .$id;
    }
}
