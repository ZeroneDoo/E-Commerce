<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Keranjang;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function homeView()
    {
        $dataBarang = Barang::all();
        return view('main.dashboard',[
            'dataBarang' => $dataBarang
        ]);
    }

    public function detailProductView($id)
    {
        $dataBarang = Barang::find($id);
        return view('main.detailProduct',[
            'dataBarang'=>$dataBarang
        ]);
    }

    public function viewCart()
    {
        $idUser = auth()->user()->id;
        $dataBarang = Keranjang::with(['pengguna', 'barang'])->where("pengguna_id", $idUser)->get();
        return view('main.cart', [
            'dataBarang' => $dataBarang,
            'total' => 0
        ]);
    }

    public function postToCart($id)
    {
        if(auth()->check())
        {
            $idUser = auth()->user()->id;
            $findBarang = Keranjang::where("pengguna_id", $idUser)->where('barang_id', $id);

            if(count($findBarang->get()) > 0)
            {
                $findBarang->update([
                    "jumlah" => $findBarang->get()->first()->jumlah + 1
                ]);

            }else{
                Keranjang::create([
                    'barang_id' => $id,
                    "pengguna_id" => $idUser,
                    "jumlah" =>1
                ]);

            }
        }
        return back();
    }

    public function viewWathclist()
    {
        return view('main.watchlist');
    }
}
