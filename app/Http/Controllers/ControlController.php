<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Shop;

class ControlController extends Controller
{
    //
    public function index(){
        $sh = Shop::get();
        $sh_count = Shop::count();
        return view('control',[
            'sh' => $sh,
            'sh_count' => $sh_count
        ]);
    }
}
