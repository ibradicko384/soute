<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AidemenageRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Aidemenage;
use App\Http\Controllers\Foyer;
use App\User;


class AidemenageController extends Controller
{
    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        $aidemenages = Aidemenage::all();
        $foyers = Foyer::all();
        return view('backoffice.aidemenage', compact('aidemenages', 'foyers'));
    }  

    public function store(AidemenageRequest $request)
{
    try {
        $data = [
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'date_de_naissance' => $request->date,
            'quartier' => $request->quartier,
        ];

        Aidemenage::create($data);

        return redirect()->route('liste_menagere')->with('success', 'Aide menage enregistré avec succès.');
    } catch (\Exception $e) {
        dd($e->getMessage());
        // Ou log l'erreur
        // Log::error($e->getMessage());
        return redirect()->back()->withInput()->with('error', 'Une erreur est survenue lors de l\'enregistrement.');
    }
}



    public function AidePublicAidesMenageres(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        $aidesMenageres = Aidemenage::all();
        return view('backoffice.menagere', compact('aidesMenageres'));
    }

    public function ListeMenagere(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        $aidesMenageres = Aidemenage::all();
        return view('backoffice.liste_menagere', compact('aidesMenageres'));

    }

    public function lister(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        dd($aidemenages);
        $foyers = Foyer::all();
        $selectedFoyer = $request->input('foyer', 'all');
        $aidemenages = Aidemenage::all();
            // : Aidemenage::where('foyer_id', $selectedFoyer)->get(); // Assurez-vous d'avoir la colonne 'foyer_id' dans la table aidemenages
        return view('backoffice.liste_aidemenage', compact('aidemenages', 'foyers', 'selectedFoyer'));
    }

    public function edit($id)
    {
        // Récupère l'utilisateur correspondant à l'ID fourni
        $aidemenages = Aidemenage::find($id);
    
        // Vérifie si l'utilisateur existe
        if (!$user) {
            // Redirige l'utilisateur vers une page d'erreur 404 avec un message
            abort(404, 'm non trouvé');
        }
    
        // Affiche la vue 'auth.edit' avec les données de l'utilisateur
        return view('profile.edit', compact('user'));
    }
}
