<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index()
    {
        return view('tambah');
    }

    //cara tambah 1
    public function tambah(Request $request)
    {
        $validasi = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);
        DB::table('posts')->insert([
            'judul' => $validasi['judul'],
            'isi' => $validasi['isi'],
            'created_at' => now(),
            'updated_at' => now()
        ]);
        return redirect('/selectpost');
    }

    //cara tambah 2
    public function insertpost(Request $request)
    {
        $validasi = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);
        $judul = $validasi['judul'];
        $isi = $validasi['isi'];
        DB::insert("insert into posts(judul, isi, created_at, updated_at) values('$judul', '$isi', now(), now())");
        return redirect('/selectpost');
    }
    public function selectpost()
    {
        $result = DB::select('select * from posts');
        return view('tampilpost', ['posts' => $result]);
    }
    public function updatepost()
    {
        $result = DB::update("update posts set
        judul = 'test judul',
        isi ='test isi'
        where id = 3 ");
        dump($result);
    }
    public function deletepost()
    {
        $result = DB::delete("delete from posts where id = 3");
        dump($result);
    }
}
