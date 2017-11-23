<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class film extends Model
{
    //

    protected $fillable = [
        'nom', 'auteur', 'date_sortie','disponible','datecreation','datesortie','datemodification'
    ];

    public function genre()
    {
        /*
         * hasMany :
         *  1st parameter : Model path OR ModelName::class
         *  2nd parameter : foreign key column (optional if convention respected (modelname_id)
         * */
        return $this->belongsTo('App\genre');
    }
}
