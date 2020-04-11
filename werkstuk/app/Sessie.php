<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessie extends Model
{
    protected $fillable = ['title', 'description', 'date', 'time_start', 'time_end', 'location'];

    public function spreker(){
        return $this->belongsTo('App\Spreker');
    }
}
