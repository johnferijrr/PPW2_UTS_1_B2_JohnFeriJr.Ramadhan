<?php

namespace App\Http\Controllers;

use App\Models\Pemain;
use Illuminate\Http\Request;

class PemainController extends Controller
{
    public function index()
    {
        $data_pemain = Pemain::all();


        return view('pemain.index', compact('data_pemain'));
    }
}
