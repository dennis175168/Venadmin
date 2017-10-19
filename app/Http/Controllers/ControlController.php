<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Shop;

class ControlController extends Controller
{
    //
    public function index(){
        $sh = Shop::where('sh_delete','=',null)->get();
        $sh_count = Shop::where('sh_delete','=',null)->count();
        return view('control',[
            'sh' => $sh,
            'sh_count' => $sh_count
        ]);
    }

    public function delete_sh(){
        $input = Input::all();
        $_id = $input['sh_id'];
        Shop::where('sh_id','=',$_id)->update(['sh_delete'=>'T']);
        //Shop::where('sh_id','=',$_id)->delete();

        $sh = Shop::where('sh_delete','=',null)->get();
        $sh_count = Shop::where('sh_delete','=',null)->count();
        return view('control',[
            'sh' => $sh,
            'sh_count' => $sh_count
        ]);
    }

    public function update_sh(){
        $input = Input::all();
        $_id = $input['sh_id'];
        $column = $input['column'];
        Shop::where('sh_id','=',$_id)->update([$column=>'reject']);

        $sh = Shop::where('sh_delete','=',null)->get();
        $sh_count = Shop::where('sh_delete','=',null)->count();
        return view('control',[
            'sh' => $sh,
            'sh_count' => $sh_count
        ]);
    }

    public function search_sh(){
        $input = Input::all();
        $search = $input['search'];
        $sh = Shop::where('sh_name', 'like', '%'.$search.'%')->get();

        //$sh = Shop::get();
        $sh_count = Shop::where('sh_name', 'like', '%'.$search.'%')->count();
        return view('control',[
            'sh' => $sh,
            'sh_count' => $sh_count
        ]);
    }
}
