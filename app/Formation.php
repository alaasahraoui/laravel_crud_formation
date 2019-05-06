<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    //we can use 2 fct $garded or $fillable
    protected $fillable=['nom','thematique','formateur','duree','fiche_tech','cible_public','code','status','programme','image'];
//  protected $garded['status']
}
