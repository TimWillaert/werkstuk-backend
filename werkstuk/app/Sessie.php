<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sessie extends Model
{
    protected $fillable = ['title', 'description', 'date', 'time_start', 'time_end', 'location'];

    public function spreker(){
        return $this->belongsTo('App\Spreker');
    }

    public function getTimeStartAttribute($value){
        $str = explode(':', $value);
        return $str[0] . ":" . $str[1];
    }

    public function getTimeEndAttribute($value){
        $str = explode(':', $value);
        return $str[0] . ":" . $str[1];
    }
}
