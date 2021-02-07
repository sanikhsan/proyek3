<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenyediaJasaController extends Controller
{
    public function dashboard(){
        return view('penyedia_jasa.content.dashboard');
    }
    public function profil_usaha(){
        return view ('penyedia_jasa.content.profil_usaha');
    }
    public function kelola_jasa(){
        return view ('penyedia_jasa.content.kelola_jasa');
    }
    public function tambah_jasa(){
        return view ('penyedia_jasa.content.tambahjasa');
    }
}
