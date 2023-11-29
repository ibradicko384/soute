<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AidemenageRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Aidemenage;
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

    dd('Store method reached', $request->all());
    try {
        if ($request->hasFile('quartier_Aidemenage')) {
            if (!Storage::disk('public')->exists('aidemenages')) {
                Storage::disk('public')->makeDirectory('aidemenages');
            }

            $file = $request->file('quartier_Aidemenage');
            $filePath = $file->store('aidemenages', 'public');

            $validatedData = $request->validated();
            $validatedData['quartier_Aidemenage'] = Storage::url($filePath);

            Aidemenage::create($validatedData);

            return redirect()->route('list.menagere')->with('success', 'Aidemenage enregistré avec succès.');
        } 
    } catch (\Exception $e) {
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
        return view('backoffice.liste_menagere');

    }

    public function lister(Request $request): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        $foyers = Foyer::all();
        $selectedFoyer = $request->input('foyer', 'all');
        $aidemenages = ($selectedFoyer == 'all') 
            ? Aidemenage::all()
            : Aidemenage::where('foyer_id', $selectedFoyer)->get(); // Assurez-vous d'avoir la colonne 'foyer_id' dans la table aidemenages
        return view('backoffice.liste_aidemenage', compact('aidemenages', 'foyers', 'selectedFoyer'));
    }
}
