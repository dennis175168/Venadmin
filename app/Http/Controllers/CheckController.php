<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Input;
use Mail;
use App\TempShop;

class CheckController extends Controller
{
    //
    public function index(){
        $tsh = TempShop::where('verify','=','F')->get();
        $tsh_count = TempShop::where('verify','=','F')->count();
        $tsh_T = TempShop::where('verify','=','T')->get();
        $tsh_count_T = TempShop::where('verify','=','T')->count();
        return view('check',['tsh' => $tsh,
                            'count' => $tsh_count, 
                            'tsh_T'=>$tsh_T,
                            'tsh_count_T'=>$tsh_count_T]);
    }

    public function checking(){
        $input = Input::all();
        $_id = $input['tsh_id'];
        //send mail
        Mail::raw('請進入以下網址進行驗證 http://127.0.0.1:3000/verify/'.$_id, function($message){   
            $input = Input::all();
            $_id = $input['tsh_id'];
            $message->subject('Venus 商家系統驗證');
            $sh = TempShop::where('tsh_id','=',$_id)->first();
            $tsh_mail = $sh->tsh_mail;
			$message->to($tsh_mail);
        });
        //update shop vertify status
        TempShop::where('tsh_id','=',$_id)->update(['verify'=>'T']);
        //index
        return Redirect::to('check');
    }

    public function checking_delete(){
        $input = Input::all();
        $_id = $input['tsh_id'];
        
        TempShop::where('tsh_id','=',$_id)->delete();
        //index
        return Redirect::to('check');
    }
}
