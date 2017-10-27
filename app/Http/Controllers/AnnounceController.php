<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Input;
use App\Board;

class AnnounceController extends Controller
{
    //
    public function index(){
        $bd_info = Board::get();
        $bd_info_count = Board::count();
        return view('announce',[
            'bd_info' => $bd_info,
            'bd_info_count' => $bd_info_count,
            'now' => date("Y-m-d"),
            'editor' => "venus管理員"
        ]);
    }

    public function insert(){
        $input = Input::all();
        $title = $input['title'];
        $doc = $input['doc'];
        $content = $input['content'];
        $time = $input['time'];
        $editor = $input['editor'];

        Board::insert([
            'bd_title'=>$title,
            'bd_doc' => $doc,
            'bd_content' => $content,
            'bd_editor' => $editor,
            'updated_at' => $time,
        ]);

        //index
        return Redirect::to('announce');
    }

    public function delete(){
        $input = Input::all();
        $bd_id = $input['bd_id'];
        Board::where('bd_id','=',$bd_id)->delete();

        
        //index
        return Redirect::to('announce');
    }
}
