<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FoyerRequest;
use Illuminate\Support\Facades\Storage;
use App\Models\Foyer;

class FoyerController extends Controller
{


    public function create()
    {
        $foyers = Foyer::all();
        return view('backoffice.foyer', compact('foyers'));
    }


    public function store(Request $request)
{
    $request->validate([
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string',
        'quartier' => 'required|string', 
    ]);

    $foyer = Foyer::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'quartier' => $request->quartier,
    ]);

    return redirect()->route('backoffice.foyer');
}

public function lister()
{
    $foyers = Foyer::all();
    return view('backoffice.list_foyers', compact('foyers')); 
}

    public function foyer($id)
    {
    $id = (int) $id;
    $foyer = Foyer::find($id);

    if (!$foyer) {
        abort(404, 'Foyer non trouvé');
    }

    return view('backoffice.foyer', compact('foyer'));
   }

}
