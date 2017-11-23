<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    //

    protected $fillable = [
        'nom',
    ];


    public function films()
    {
        /*
         * hasMany :
         *  1st parameter : Model path OR ModelName::class
         *  2nd parameter : foreign key column (optional if convention respected (modelname_id)
         * */
        return $this->hasMany('App\film');
    }
}
