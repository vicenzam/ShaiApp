<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Egress extends Model
{
    protected $fillable = [
        'name', 'amount', 'date', 'observation'
    ];
   

    //un egreso tiene muchas etiquetas
    public function egresstags()
    {
        return $this->hasMany('App\EgressTag');
    }
}
