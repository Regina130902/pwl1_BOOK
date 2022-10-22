<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dosencontroller extends Controller
{
    public function index(){
        $data = ["gina", "layung", "Permata"];
        return view ('dosen', ['nama' => $data]);
    }
}
