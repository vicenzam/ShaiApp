<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Egress extends Model
{
    protected $fillable = [
        'name', 'amount', 'date', 'observation'
    ];
   

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
