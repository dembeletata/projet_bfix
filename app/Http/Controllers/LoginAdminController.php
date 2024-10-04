<?php

namespace App\Http\Controllers;

use App\Models\LoginAdmin;
use Illuminate\Http\Request;

class LoginAdminController extends Controller
{

    public function loginAdmin()
    {
        return view ('admin.loginAdmin');
    }

    public function createAdmin(Request $request)
    {
       $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'role' => 'required|email|max:255',
        ]);

        dump($request);
        $loginAdmin = new LoginAdmin();
        $loginAdmin->nom = $request->nom;
        $loginAdmin->prenom = $request->prenom;
        $loginAdmin->email = $request->email;
        $loginAdmin->role = $request->role;

        $loginAdmin->save();

        return response()->json(['message' => 'admin créer avec succès.']);
    }

}
