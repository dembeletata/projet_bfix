<?php

namespace App\Http\Controllers;
use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    public function actualite()
    {
        $actualites = Actualite::orderBy('created_at', 'desc')->get();
        return view ('admin.actualite',compact('actualites'));
    }
    public function afficher_actualite()
    {
        $actualites = Actualite::orderBy('created_at', 'desc')->get();
        return view ('/actualites',compact('actualites'));
    }

    public function ajout_actualite(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'contenue' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:32768',
        ]);

        $actualite = new Actualite;
        $actualite->titre = $request->titre;
        $actualite->contenue = $request->contenue;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('images', 'public');
            $actualite->image = $imagePath;
        }

        $actualite->save();

        return redirect('/admin/actualite')->with('status', 'Actualitée enregistrer avec succès !');
    }

    public function destroy($id)
    {
        $actualite = Actualite::findOrFail($id);
        $actualite->delete();

        return redirect()->back()->with('success', 'Actualité supprimée avec succès.');
    }

}
