<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidadao extends Model
{
    //
    public function endereco()
    {
        return $this->hasOne('App\Endereco');
    }


}
