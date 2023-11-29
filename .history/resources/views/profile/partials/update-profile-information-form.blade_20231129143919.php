<section>
    <header class="mb-4">
        <h2 class="text-lg font-medium text-gray-900">
            Informations du profil
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Mettez à jour les informations de votre compte.
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.s') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')

        <div class="mb-3">
    <label for="name" class="form-label">Nom</label>
    <input type="text" id="name" name="name" class="form-control" value="{{ old('name', optional($user)->name) }}" required autofocus autocomplete="name">
    
</div>

<div class="mb-3">
    <label for="surname" class="form-label">Prénom</label>
    <input type="text" id="surname" name="surname" class="form-control" value="{{ old('surname', optional($user)->surname) }}" required autofocus autocomplete="surname">
   
</div>

<div class="mb-3">
    <label for="email" class="form-label">E-mail</label>
    <input type="email" id="email" name="email" class="form-control" value="{{ old('email', optional($user)->email) }}" required autocomplete="username">
    

    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
        <div class="mt-2">
            <p class="text-sm text-gray-800">
                Votre adresse e-mail n'est pas vérifiée.
                <button form="send-verification" class="btn btn-link p-0">
                    Cliquez ici pour renvoyer l'e-mail de vérification.
                </button>
            </p>

            @if (session('status') === 'verification-link-sent')
                <p class="mt-2 text-success">
                    Un nouveau lien de vérification a été envoyé à votre adresse e-mail.
                </p>
            @endif
        </div>
    @endif
</div>

        <div class="d-flex align-items-center gap-4">
            <button type="submit" class="btn btn-primary">Enregistrer</button>

            @if (session('status') === 'profile-updated')
                <p class="text-sm text-success">Enregistré.</p>
            @endif
        </div>
    </form>
</section>
