<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EgressTag extends Model
{
    protected $fillable = [
        'egress_id', 'name', 'amount', 'date', 'observation'
    ];
      

    //muchos etiquetas pertenecen a un ingreso
    public function egress()
    {
        return $this->belongsTo('App\Egress');
    }
}
