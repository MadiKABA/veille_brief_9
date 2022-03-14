<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;
    protected $fillable =['nom','phone','siegeSocial','registre','siteWeb','ninea','contrat','dispoFormation',
    'dateCreation','quartier_id','domaine_id','nbre_employe_id'
    ];
}
