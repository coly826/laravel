<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ophtolmologue;

class ConsultationController extends Controller
{
    public function createOphtalmologueForm() {
        return view('ophtalmologue');
    }

    public function storeOphtalmologue(Request $request) {
        // Valider les données
        $request->validate([
            'name' => 'required|string|max:255',
            'doctor_name' => 'required|string|max:255',
            'appointment_date' => 'required|date',
        ]);

        // Créer une nouvelle consultation
        Ophtolmologue::create([
            'name' => $request->name,
            'doctor_name' => $request->doctor_name,
            'appointment_date' => $request->appointment_date

        ]);

        return redirect()->back()->with('success', 'Rendez-vous chez l Ophtalmologue ajouté avec succès.');
    }
    public function editOphtalmologue($id) {
        $ophtalmologue = Ophtolmologue::findOrFail($id);
        return view('modifier', compact('ophtalmologue'));
    }

    public function updateOphtalmologue(Request $request, $id) {
        $ophtalmologue = Ophtolmologue::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'doctor_name' => 'required|string|max:255',
            'appointment_date' => 'required|date',
        ]);

        $ophtalmologue->update($request->all());

        return  ' Rendez-vous modifié avec succès.';
    }

    public function destroyOphtalmologue($id) {
        $ophtalmologue = Ophtolmologue::findOrFail($id);
        $ophtalmologue->delete();
        return  redirect()->back()->with('success', ' Rendez-vous supprimé avec succès.');
    }


    // Créez des méthodes similaires pour Consultation Générale, Gynécologue, Dentiste, Pédiatre et Contact Us
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

</body>
</html>
