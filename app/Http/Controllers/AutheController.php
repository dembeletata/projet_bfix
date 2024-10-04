<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Demande;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class AutheController extends Controller
{
    public function connexion()
    {
        $demandes = Demande::all();
        $categories = Category::all();
        return view ('connexion',compact('demandes', 'categories'));
    }

    public function log(Request $request)
    {

        $request->validate([
            'service' => 'required|string',
            'pseudo' => 'required|string',
            'motDePasse' => 'required|string',
        ]);



        $service = strtolower($request->input('service'));
        $pseudo = $request->input('pseudo');
        $motDePasse = $request->input('motDePasse');

        $demandes = Demande::where('pseudo', $pseudo)
                        ->first();
        if ($demandes) {
            if ($demandes->nom_service !== $service) {
                return redirect()->back()->with('alert', 'nom de service incorrect');

            } elseif (!Hash::check($motDePasse, $demandes->mot_de_passe)) {
                return redirect()->back()->with('alert', 'mot de passe incorrect');
            } else {

                $request->session()->put('pseudo', $pseudo);
                $request->session()->put('service', $service);

                $service=strtolower($service);
                return redirect("/monitoring/$service");

            }
        } else {

            return back()->withErrors(['alert2' => 'Les informations fournies sont incorrectes.']);
        }
    }

    public function logo(Request $request)
    {
        $request->session()->forget(['pseudo', 'service']);

        return redirect('/connexion')->with('alert', 'Vous avez été déconnecté.');
    }

}
