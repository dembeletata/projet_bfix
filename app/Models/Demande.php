<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Demande extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'demandes';
    protected $primaryKey = 'id_demande';
    protected $fillable = ['nom', 'prenom', 'nom_service', 'id_service', 'email', 'pseudo', 'mot_de_passe', 'status'];

}
