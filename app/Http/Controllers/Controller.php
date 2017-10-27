<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function  aaa(){
        return "view('beacon',[
            'bc_info' => $bc_info,
            'bc_info_count' => $bc_info_count,
            'sh_bc_info' => $sh_bc_info,
            'sh_bc_info_count' => $sh_bc_info_count,
        ]);";
    }
}
