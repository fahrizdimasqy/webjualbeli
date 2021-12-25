<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    //
    public function index()
    {
        # code...
        $barang = Barang::all();
        return view('admin/index', compact('barang'));
    }
    public function create()
    {
        //
        return view('admin/tambah');
    }

    public function store(Request $request)
    {
        //
        $data=new Barang();
        $data->nama_barang=$request->get('nama_barang');
        $data->harga_barang=$request->get('harga_barang');
        $data->save();
        return redirect()->route('admin');
    }
   
}
