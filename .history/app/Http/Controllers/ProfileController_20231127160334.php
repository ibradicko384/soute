<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Http\Middleware\RedirectIfAuthenticated;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
{
    // Récupère l'utilisateur authentifié
    $user = $request->user();

    // Vérifie si l'utilisateur est authentifié
    if ($user) {
        // Remplit l'utilisateur avec les données validées du formulaire
        $user->fill($request->validated());

        // Vérifie si l'adresse e-mail a été modifiée
        if ($user->isDirty('email')) {
            $user->email_verified_at = null;
        }

        // Sauvegarde les modifications de l'utilisateur
        $user->save();

        // Redirige l'utilisateur vers la page d'édition avec un message de succès
        return redirect()->route('profile.edit')->with('status', 'profile-updated');
    } else {
        // Redirige l'utilisateur vers la page de connexion s'il n'est pas authentifié
        return redirect()->route('login');
    }
}


    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('dashboard');
    }
}
