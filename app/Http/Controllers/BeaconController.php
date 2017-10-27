<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Input;
use App\Beacon;
use App\Shop;

class BeaconController extends Controller
{
    //

    public function index(){
        $bc_info = Beacon::get();
        $bc_info_count = Beacon::count();
        $sh_bc_info = Shop::where('sh_beacon','=','F')->get();
        $sh_bc_info_count = Shop::where('sh_beacon','=','F')->count();
        return view('beacon',[
            'bc_info' => $bc_info,
            'bc_info_count' => $bc_info_count,
            'sh_bc_info' => $sh_bc_info,
            'sh_bc_info_count' => $sh_bc_info_count,
        ]);
    }

    public function insert(){
        //insert into beacon table
        $input = Input::all();
        $sh_id = $input['insert_sh_id'];
        $major = $input['insert_major'];
        $minor = $input['insert_minor'];
        $check = Beacon::where('major','=',$major)->first();
        if($check== null){
            Beacon::insert([
                'sh_id'=>$sh_id,
                'major' => $major,
                'minor' => $minor,
            ]);
            //update shop table
            Shop::where('sh_id','=',$sh_id)->update(['sh_beacon'=>'T']);
            session()->flash('flash_message_g', '新增成功!! ');
        }else{
            session()->flash('flash_message_f', '新增失敗!!裝置編號'.$check.'已被使用了,請換一組數字! ');
        }
        
        //index
        return Redirect::to('beacon');
    }

    public function delete(){
        //delete
        $input = Input::all();
        $beacon_id = $input['delete_beacon_id'];
        $sh_id = $input['delete_sh_id'];
        Beacon::where('beacon_id','=',$beacon_id)->delete();
        //update shop table
        Shop::where('sh_id','=',$sh_id)->update(['sh_beacon'=>'F']);
        
        //index
        return Redirect::to('beacon');
    }
}


