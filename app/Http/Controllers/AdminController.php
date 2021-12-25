<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Session;
use App\Barang;

class AdminController extends Controller
{
    //
    public function login()
    {
        # code...
        return view('admin/login');
    }
    public function actionlogin(Request $request)
    {
        # code...
        $this->validate($request,
 
            ['username'=>'required'],
 
            ['password'=>'required']
            
        );
 
        $user = $request->input('username');
        $pass = $request->input('password');        
 
        $users = DB::table('admin')->where(['username'=> $user])->first();
        
                if(count(array($users))==0){
        
                   return redirect('/login')->with('failed','Login gagal');
        
                } else
               
                if($users->username == $user AND $users->password = $pass){
                    
                   Session::put('login', 'Selamat anda berhasil login');
                   return redirect('/admin');
        
                } else {
                     
                   return redirect('/login')->with('failed','Login gagal');
          
                }
    }
    public function index()
    {
        # code...
        $barang = Barang::all();
        return view('admin/index', compact('barang'));
    }
}
