<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }
    public function Hasil(Request $request)
    {
        $validasi = $request->validate([
            'angka1' => 'required',
            'angka2' => 'required',
            'calculator' => 'required',
        ]);
        $hasil = 0;

        //cara 1
        // switch ($validasi['calculator']) {
        //     case 'Penjumlahan':
        //         $hasil = $validasi['angka1'] + $validasi['angka2'];
        //         break;
        //     case 'Pengurangan':
        //         $hasil = $validasi['angka1'] - $validasi['angka2'];
        //         break;
        //     case 'Perkalian':
        //         $hasil = $validasi['angka1'] * $validasi['angka2'];
        //         break;
        //     case 'Pembagian':
        //         $hasil = $validasi['angka1'] / $validasi['angka2'];
        //         break;
        // }

        //cara 2
        if ($validasi['calculator'] == 'Penjumlahan') {
            $hasil = $validasi['angka1'] + $validasi['angka2'];
        } elseif ($validasi['calculator'] == 'Pengurangan') {
            $hasil = $validasi['angka1'] - $validasi['angka2'];
        } elseif ($validasi['calculator'] == 'Perkalian') {
            $hasil = $validasi['angka1'] * $validasi['angka2'];
        } elseif ($validasi['calculator'] == 'Pembagian') {
            $hasil = $validasi['angka1'] / $validasi['angka2'];
        }

        // echo "hasil = $hasil";
        $data = [
            'angka1' => $validasi['angka1'],
            'angka2' => $validasi['angka2'],
            'calculator' => $validasi['calculator'],
            'hasil' => $hasil
        ];
        return view('hasil', $data);
    }
}
