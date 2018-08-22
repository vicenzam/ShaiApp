<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = [
        'name', 'amount', 'date', 'observation'
    ];
   

   //un ingreso tiene muchas etiquetas
    public function incometags()
    {
        return $this->hasMany('App\IncomeTag');
    }   
}
