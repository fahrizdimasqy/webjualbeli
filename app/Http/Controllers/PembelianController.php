<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;
use App\Pembelian;

class PembelianController extends Controller
{
    //
    public function index()
    {
        # code...
        $barang = Barang::all();
        return view('user/user', compact('barang'));
    }
    public function pembelian($id)
    {
        # code...
        $barang = Barang::find($id);
        return view('user/beli', compact('barang'));
    }
    public function aksipembelian(Request $request)
    {
        # code...
        $pembelian = new Pembelian();
        $barang =  Barang::find($request->id_barang);
        $pembelian->id_barang=$request->input('id_barang');
        $pembelian->nama_pembeli=$request->get('nama_pembeli');
        $pembelian->jumlah_beli=$request->input('jumlah_beli');
        $total_harga = $pembelian->jumlah_beli * $barang->harga_barang;
        $potongan=null;
        $diskon=null;
        $total_bayar=null;
        if($total_harga >= 50000) {
            $potongan = '10%';
            $diskon = $total_harga * 10/100;
            $total_bayar = $total_harga - $diskon;
        }
        $pembelian->save();
        
        return redirect('/')->with('tampil', 'total belanja anda ' .$total_harga. '.Rp, Selamat anda mendapat potongan sebesar ' . $potongan. '.Rp, jadi total belanja anda menjadi' .$total_bayar. '.Rp');
       

    }
}
