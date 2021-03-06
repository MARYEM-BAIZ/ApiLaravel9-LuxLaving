<?php

namespace App\Models;

use App\Models\Commande;
use App\Models\PaiementType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paiement extends Model
{
    use HasFactory;

    // setting models relations
    public function commande(){

        return $this->hasOne(Commande::class, 'commande_id', 'id');

    }

    public function paiementType(){

        return $this->bhasOne(PaiementType::class, 'paiement_type_id', 'id');

    }
}
