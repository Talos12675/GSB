<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\Visiteur;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'matricule' => 'required|string',
            'password' => 'required',
        ]);

        $visiteur = Visiteur::where('VIS_MATRICULE', $request->matricule)->first();

        if ($visiteur && $request->password == date('Y', strtotime($visiteur->VIS_DATEEMBAUCHE))) {
            session([
                'loggedin' => true,
                'matricule' => $visiteur->VIS_MATRICULE,
                'nom' => $visiteur->VIS_NOM,
                'prenom' => $visiteur->VIS_PRENOM,
            ]);
            return redirect()->route('dashboard');
        }

        throw ValidationException::withMessages([
            'matricule' => ['Les informations d\'identification fournies ne correspondent pas à nos enregistrements.'],
        ]);
    }

    public function logout(Request $request)
    {
        session()->forget(['loggedin', 'matricule', 'nom', 'prenom']);
        return redirect('/');
    }
}