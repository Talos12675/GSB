<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RapportVisite;
use App\Models\Praticien;
use App\Models\Medicament;

class DashboardController extends Controller
{
    public function index()
    {
        if (!session('loggedin')) {
            return redirect('/login');
        }
        
        $user = session('matricule');
        
        // Get recent reports for the user
        $recentRapports = RapportVisite::where('VIS_MATRICULE', $user)->orderBy('RAP_DATE', 'desc')->take(5)->get();
        
        return view('dashboard', compact('recentRapports'));
    }
}