<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\CredentialsGenerated;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Demande;
use App\Notifications\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DemandeController extends Controller
{
    public function acceuil()
    {
        $demandes = Demande::all();
        $categories = Category::all();
        return view ('acceuil',compact('demandes', 'categories'));
    }
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'nom_service' => 'required|string|max:255',
            'id_service' => 'required|integer',
            'email' => 'required|email|max:255',
        ]);

        Demande::create($validatedData);

        return response()->json(['message' => 'Demande envoyée avec succès.']);
    }

    public function dmd()
    {
        $demandes = Demande::all();
        return view ('admin.dmd',compact('demandes'));
    }
    public function envoyer_demande(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'nom_service' => 'required|string|max:255',
            'id_service' => 'required|string|max:255',
            'email' => 'required|email|max:255',

        ]);


        $demande = new Demande();
        $demande->nom = $request->nom;
        $demande->prenom = $request->prenom;
        $demande->nom_service = $request->nom_service;
        $demande->id_service = $request->id_service;
        $demande->email = $request->email;

        $demande->save();

        return redirect('')->with('success', 'Demande envoyée avec succès!');

    }



    public function valider(Request $request, $id_demande)
    {
        $request->validate([
            'action' => 'required|in:accepter,refuser',
            'id_demande' => 'required|integer|exists:demandes,id_demande',
        ]);

        $demande = Demande::find($id_demande);
        if ($demande) {

            $nom = $demande->nom;
            $prenom = $demande->prenom;


            if ($request->input('action') == 'accepter') {
                $pseudo = $nom.$prenom.$id_demande;
                $motDePasse = Str::random(8);

                $demande->pseudo = $pseudo;
                $demande->mot_de_passe = Hash::make($motDePasse);
                $demande->status = 'acceptée';
                $demande->save();



                try {
                    $demande->notify(new SendMail($pseudo, $motDePasse));
                } catch (\Throwable $th) {
                    dd($th);
                }


            } elseif ($request->input('action') == 'refuser') {
                $demande->status = 'refusée';
                $demande->save();
            }

            return redirect()->back()->with('message', 'Action effectuée avec succès.');
        } else{
            return redirect()->back()->with('message', 'identifiant invalide');

        }

    }


}
