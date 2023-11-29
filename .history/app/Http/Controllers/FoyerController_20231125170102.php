<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FoyerRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Foyer;



class FoyerController extends Controller
{


    public function create(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {   

        
        $foyers = Foyer::all();
        return view('backoffice.foyer', compact('foyers'));
    }


    public function store(FoyerRequest $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string',
        'quartier' => 'required|string', 
    ]);

    Foyer::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'quartier' => $request->quartier,
    ]);

    return redirect()->route('backoffice.foyer');
}

public function lister(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
{
    $foyers = Foyer::all();
    return view('backoffice.list_foyers', compact('foyers')); 
}


}
