<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'name', 'amount', 'date', 'observation'
    ];
   

    public function incomes(){
        return $this->belongsToMany(Income::class);
    }

    public function egresses(){
        return $this->belongsToMany(Egress::class);
    }
}
