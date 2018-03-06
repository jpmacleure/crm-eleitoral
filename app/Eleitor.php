<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleitor extends Model
{
    //
    public function cidadao()
    {
        return $this->hasOne('App\Cidadao');
    }
}
