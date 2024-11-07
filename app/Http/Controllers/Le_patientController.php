<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Le_patient; // Correcte orthographe du modèle

class Le_patientController extends Controller
{
    public function formpatient(){
        return view('patient');
    }

    public function storepatient(Request $request){

        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'date_naissance' => 'required|date',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:255',
        ]);

        // Créer un nouveau patient
        Le_patient::create([ // Correction du nom ici
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date_naissance' => $request->date_naissance,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
        ]);

       
         return 'Patient ajouté avec succès.';
    }
}
