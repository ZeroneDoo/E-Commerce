<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function formBarang()
    {
        return view("admin.barang.formBarang");
    }

    public function createBarang(Request $request)
    {
        
    }
}
