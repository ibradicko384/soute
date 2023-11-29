<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use App\Helpers\UserHelper;
use App\Helpers\ResponseHelper;

class RegisteredUserController extends Controller
{
    /**
     * Affiche le formulaire d'inscription.
     */
    public function create(): View
    {
        return view('auth.register'); // Affiche le formulaire d'inscription
    }

    /**
     * Traite une demande d'inscription entrante.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        // Valide les données du formulaire d'inscription
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        // Crée un nouvel utilisateur avec les données du formulaire
        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname, // Utilise le champ 'surname'
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
        ]);

        // Déclenche l'événement d'inscription
        event(new Registered($user));

        // Redirige l'utilisateur vers la page d'accueil
        return redirect()->route('user')->with('success', 'Utilisateur ajouter');
    }

    /**
     * Affiche la liste des utilisateurs.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function lister(): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory
    {
        $users = User::all(); // Récupère tous les utilisateurs de la base de données

        // Affiche la vue 'backoffice.user' avec la liste des utilisateurs
        return view('backoffice.user', ['users' => $users]);
    }

    /**
     * Affiche le formulaire d'édition pour un utilisateur spécifique.
     *
     * @return never
     */
    // public function edit($id)
    // {
    //     // Récupère l'utilisateur correspondant à l'ID fourni
    //     $user = User::findOrFail($id);
    //     dd($user);
    //     // Affiche la vue 'auth.edit' avec les données de l'utilisateur
    //     return view('edit', compact('user'));
    // }
    public function edit($id)
    {
        // Récupère l'utilisateur correspondant à l'ID fourni
        $user = User::find($id);
    
        // Vérifie si l'utilisateur existe
        if (!$user) {
            // Redirige l'utilisateur vers une page d'erreur 404 avec un message
            abort(404, 'Utilisateur non trouvé');
        }
    
        // Affiche la vue 'auth.edit' avec les données de l'utilisateur
        return view('edit', compact('user'));
    }
    
    /**
     * Traite une demande de mise à jour pour un utilisateur spécifique.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, $id): RedirectResponse
    {
        // Valide les données du formulaire de mise à jour
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$id],
            'password' => ['nullable', 'confirmed', Rules\Password::defaults()],
        ]);

        // Récupère l'utilisateur correspondant à l'ID fourni
        $user = User::findOrFail($id);
        $data = $request->except('password');

        // Si un nouveau mot de passe est fourni, le hache et l'ajoute aux données
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        // Met à jour les données de l'utilisateur
        $user->update($data);

        // Redirige l'utilisateur vers la liste des utilisateurs avec un message de succès
        return redirect()->route('userList')->with('success', 'Utilisateur mis à jour avec succès.');
    }

    /**
     * Supprime un utilisateur spécifique de la base de données.
     *
     * @param  int  $id ID de l'utilisateur à supprimer
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        UserHelper::deleteUser($id); // Appelle la méthode pour supprimer l'utilisateur

        // Redirige l'utilisateur vers la liste des utilisateurs avec un message de succès
        return ResponseHelper::redirectWithSuccess('user', 'Utilisateur supprimé avec succès.');
    }

    /**
     * Affiche les détails d'un utilisateur spécifique.
     *
     * @param  int  $id ID de l'utilisateur à afficher
     * @return View
     */
    public function show($id): View
    {
        // Récupère l'utilisateur correspondant à l'ID fourni
        $user = User::findOrFail($id);

        // Affiche la vue 'auth.show' avec les données de l'utilisateur
        return view('auth.show', compact('user'));
    }
    public function showProfileView()
{
    // ... autres logiques du contrôleur ...

    // Exemple : récupération de l'utilisateur
    $user = Auth::user();

    // Passage de la variable $user à la vue
    return view('auth.show')->with('user', $user);
}

public function showProfileView()
{
    // Récupération de l'utilisateur authentifié
    $user = Auth::user();

    // Vérification si l'utilisateur est authentifié
    if ($user) {
        // Si l'utilisateur est authentifié, affiche la vue 'profile' avec les détails de l'utilisateur
        return view('profile')->with('user', $user);
    } else {
        // Si l'utilisateur n'est pas authentifié, redirige-le vers la page de connexion
        return redirect()->route('login');
    }
}

}
