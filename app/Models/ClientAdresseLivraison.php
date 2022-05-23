<?php

namespace App\Models;

use App\Models\Client;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ClientAdresseLivraison extends Model
{
    use HasFactory;

    // setting models relations
    public function client(){

        return $this->belongsTo(Client::class, 'id', 'adresse_livraison');

    }

    public function commande(){

        return $this->belongsTo(Commande::class, 'id', 'adresse_livraison');

    }
}
