<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //
    protected $table = "shop";

    public function beacon(){
        return $this -> belongsTo ('App\Beacon','sh_id','sh_id');
    }
}
