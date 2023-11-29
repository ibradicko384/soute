<?php

namespace App\Http\Controllers;

use App\Models\Commentaire;
use App\Http\Requests\StoreCommentaireRequest;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateCommentaireRequest;
use App\Models\AideMenagere;


class CommentaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): void
    {
        //
    }


    public function commentaire()
    {
        // Logique de la méthode commentaire ici
        return view('commentaire'); // Assurez-vous que le nom de la vue correspond à votre structure de fichiers
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(AideMenagere $aideMenagere)
    {
        return view('commentaires.commentaire', compact('aideMenagere'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string',
            'aide_menagere_id' => 'required|exists:aide_menageres,id',
        ]);

        Commentaire::create([
            'message' => $request->message,
            'aide_menagere_id' => $request->aide_menagere_id,
        ]);

        return redirect()->route('aide_menagere.show', $request->aide_menagere_id)
            ->with('success', 'Commentaire ajouté avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Commentaire $commentaire): void
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commentaire $commentaire): void
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentaireRequest $request, Commentaire $commentaire): void
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Commentaire $commentaire): void
    {
        //
    }
}
