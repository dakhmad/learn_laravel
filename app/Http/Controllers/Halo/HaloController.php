<?php

namespace App\Http\Controllers\Halo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HaloController extends Controller
{
    public function index()
    {
        $name = 'Joko';
        return '<h1>Halo dari controller</h1>';
    }

    public function variabelKirim()
    {
        $name = 'Joko';
        $data = ['nama' => $name];
        return view('coba.halo', $data);
    }
}
