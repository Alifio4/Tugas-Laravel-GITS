<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\buku;

class BukuController extends Controller
{
    public function index()
    {
        // ORM
        // $bukuku = buku::all();
        $bukuku['buku'] = buku::all();
        return view('index', $bukuku);
    }
    public function lah()
    {
        
        return view('lah');
    }
}
