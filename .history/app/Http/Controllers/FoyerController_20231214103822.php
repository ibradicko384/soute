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
        $foyer = new Foyer();
        $titre = "Inscription d'un foyer";
        return view('backoffice.foyer', compact('foyers', 'foyer', 'titre'));
    }

    public function store(FoyerRequest $request)
{
    $validatedData = $request->validated();

    Foyer::create($validatedData);

    return redirect()->route('liste_foyers');
}


    public function lister()
    {
        $foyers = Foyer::all();
        return view('backoffice.liste_foyer', compact('foyers')); 
    }

    
    public function foyer(Foyer $foyer)
    {
        $titre = $foyer[prenom] ;
        return view('backoffice.foyer', compact('foyer', 'titre')); // Assurez-vous que le nom de la vue correspond à votre structure de fichiers
    }
}
