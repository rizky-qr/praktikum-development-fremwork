<?php

namespace App\Http\Controllers;

use PhpParser\Node\Stmt\Return_;

// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Routing\Controller as BaseController;





//pertemuan 3
class PageController extends Controller
{
    public function index()
    {
        return ('<h1>halaman index</h1>');
    }
    public function loop()
    {
        return view('loop');
    }
    public function ujian()
    {
        return view('siswa', ["siswa" => "Rizky", "nilai" => 75]);
    }

    public function data()
    {
        return view('data', ["data" => ["Rizky", "dua",  "benar", "terima kasih",]]);
    }








    // public function index()
    // {
    //     return view('page');
    // }
}
