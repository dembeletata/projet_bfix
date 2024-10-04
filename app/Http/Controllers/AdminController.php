<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Contact;
use App\Models\Actualite;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class AdminController extends Controller
{
    public function approve(Request $request, $id)
    {
        $demande = Demande::find($id);
        if ($demande) {
            $username = strtolower($demande->prenom . '.' . $demande->nom);
            $password = Str::random(10); // Utiliser Str::random pour générer un mot de passe aléatoire

            Agent::create([
                'username' => $username,
                'password' => Hash::make($password),
                'service' => $demande->nom_service,
            ]);

            Mail::to($demande->email)->send(new \App\Mail\AccountCreated($username, $password));

            return response()->json(['message' => 'Agent créé et email envoyé.']);
        }

        return response()->json(['message' => 'Demande non trouvée.'], 404);
    }
    public function tableau()
    {
        $nmbContact = Contact::count();
        $nmbDemande = Demande::count();
        $nmbDemandeA = Demande::where('status', 'acceptée')->count();
        $nmbDemandeR = Demande::where('status', 'refusée')->count();
        $nmbActualite = Actualite::count();

        return view('admin.tb', compact('nmbContact', 'nmbDemande', 'nmbDemandeA', 'nmbDemandeR', 'nmbActualite'));

    }
}
