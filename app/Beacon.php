<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beacon extends Model
{
    //
    protected $table = "beacon";

    public function shop(){
        return $this -> hasOne ('App\Shop','sh_id','sh_id');
    }
}
