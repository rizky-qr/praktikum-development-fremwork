<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    public function formAdd()
    {
        return view('formproduk');
    }


    public function insertProduk(Request $request)
    {
        $validasi = $request->validate([
            'namaProduk' => 'required|min:5',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'deskripsi' => 'required',
            'jumlah' => 'required|numeric',
        ]);
        $namaProduk = $validasi['namaProduk'];
        $kategori = $validasi['kategori'];
        $harga = $validasi['harga'];
        $deskripsi = $validasi['deskripsi'];
        $jumlah = $validasi['jumlah'];

        DB::insert("insert into barang(namaProduk, kategori, harga, deskripsi, jumlah, created_at, updated_at)
        values('$namaProduk', '$kategori', '$harga', '$deskripsi', '$jumlah', now(), now())");
        return redirect('/selectProduk');
    }
    public function selectProduk()
    {
        $result = DB::select('select * from barang');
        return view('tampilproduk', ['barang' => $result]);
    }
    public function updateProduk()
    {
        $result = DB::update("update barang set
        namaProduk = 'test namaProduk',
        kategori = 'test kategori',
        harga = '2000',
        deskripsi = 'test deskripsi',
        jumlah = '4'
        where id = 4 ");
        return redirect('/selectProduk');
    }
    public function deleteProduk()
    {
        $result = DB::delete("delete from barang where id = 4");
        return redirect('/selectProduk');
    }
}
