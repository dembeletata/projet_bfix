<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function envoyer_message(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'sujet' => 'required',
            'message' => 'required',
            'email' => 'required|email|max:255',

        ]);


        $contact = new Contact();
        $contact->nom = $request->nom;
        $contact->prenom = $request->prenom;
        $contact->sujet = $request->sujet;
        $contact->message = $request->message;
        $contact->email = $request->email;

        $contact->save();

        return redirect('')->with('success', 'message envoyée avec succès!');

    }

    public function message()
    {
        $contacts = Contact::orderBy('created_at', 'desc')->get();
        return view ('admin.message',compact('contacts'));
    }

    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return redirect()->back()->with('success', 'Actualité supprimée avec succès.');
    }

}
