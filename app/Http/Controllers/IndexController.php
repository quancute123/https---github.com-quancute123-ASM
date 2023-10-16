<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home(){
        return view('page.home');
    }
    public function chitiet_sanpham(){
        return view('page.chitietsanpham');
    }
}
