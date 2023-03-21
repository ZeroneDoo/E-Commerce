<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function formBarang()
    {
        return view("admin.barang.formBarang");
    }

    public function createBarang(Request $request)
    {
        $validasi = $request->validate([
            'nama_barang' => "required",
            'harga' => "required",
            'stok' => "required",
            'deskripsi' => "required",
            'image' => 'required|image|mimes:jpeg,jpg,png'
        ],[
            "nama_barang.required" => 'Nama barang tidak boleh kosong!',
            "harga.required" => 'Harga barang tidak boleh kosong!',
            "stok.required" => 'Stok barang tidak boleh kosong!',
            "deskripsi.required" => 'Deskripsi barang tidak boleh kosong!',
            "image.required" => 'Gambar barang tidak boleh kosong!',
        ]);

        
        $imageName = time().".".$request->image->extension();
        
        $request->image->storeAs('public/images', $imageName);
        
        $data = Barang::create([
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'image' => $imageName,
        ]);


        return redirect()->route('home'); 
    }
}
