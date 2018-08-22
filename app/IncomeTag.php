<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class IncomeTag extends Model
{
    protected $fillable = [
        'income_id', 'name', 'amount', 'date', 'observation'
    ];
      

    //muchos etiquetas pertenecen a un ingreso
    public function income()
    {
        return $this->belongsTo('App\Income');
    }
}
