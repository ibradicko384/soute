<div class="topbar">
        <div class="toggle">
            <ion-icon name="grid-outline"></ion-icon>
        </div>
        <div class="search">
            <label>
                <input type="text" placeholder="Search here">
            </label>
        </div>               
        <div class="user">
         <span id="logoutButton" class="icon">
         
            <ion-icon class="user" name="arrow-undo-circle-outline" style="font-size: 2em; margin"></ion-icon>
        </span>     
</div>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Confirmation de déconnexion</h5>
               
            </div>
            <div class="modal-body">
                Êtes-vous sûr de vouloir vous déconnecter ?
            </div>
            

            <button type="button" class="btn btn-danger" onclick="logout()">Déconnexion</button>

<script>
    function logout() {
        alert('Déconnexion bouton cliqué');
    }
</script>

            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Annuler') }}</button>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Déconnexion</button>
                </form>
            </div>
        </div>
    </div>
</div>

                