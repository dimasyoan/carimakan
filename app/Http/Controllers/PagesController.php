<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getIndex()
    {
    	return view('pages/welcome');
    }

    public function getInputData()
    {
    	return view('pages/inputdata');
    }

    public function getTampildata()
    {
    	$namawarung = "Warung Emak";
    	$alamatwarung = "Jalan Keputih Perintis No. 20, Sukolilo, Surabaya.";
    	$waktubuka = "Pagi";
    	$kategorimakanan = "Makanan Rumahan";

    	return view('pages/tampildata')->with([
    		'warung' => $namawarung,
    		'alamat' => $alamatwarung,
    		'waktu' => $waktubuka,
    		'kategori' => $kategorimakanan
    		]);
    	
    }

	public function getLogin()
    {
    	return view('pages/login');
    }    
}
