<aside>
<div class="">
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                    <span class="logo">
                            <img style="font-size: 4em; border-radius: 8px" src="{{ asset('images/Image_3.png') }}" alt="Votre Logo">
                        </span>
                        <!-- <span class="icon">
                            <ion-icon style="font-size: 4em;" name="person-circle-outline"></ion-icon>
                        </span> -->
                        <span class="title">{{ "i" }} {{ "MENA" }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('backoffice.dashboard') }}">
                        <span class="icon">
                            <ion-icon name="apps-outline"></ion-icon>
                        </span>
                        <span class="title">Accueil</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('menagere') }}">
                        <span class="icon">
                        <ion-icon name="person-add-outline"></ion-icon>
                        </span>
                        <span class="title">Aide ménagère</span>
                    </a>
                </li>
                
                <li>
                    <a href="{{ route('foyer') }}">
                        <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Foyer</span>
                    </a>
                </li>
                <li>
                    {{-- <a href="{{ route('foyer.show') }}"> --}}
                    <a href="">
                        <span class="icon">
                        <ion-icon name="chatbox-outline"></ion-icon>
                        </span>
                        <span class="title">Messagerie</span>
                    </a>
                </li>
                <li>
                 {{-- <a href="{{ route('foyer.show') }}"> --}}
                    <a href="">
                           <span class="icon">
                        <ion-icon name="contract-outline"></ion-icon>
                        </span>
                        <span class="title">Gestion des contrats</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('messages.index') }}">
                        <span class="icon">
                        <ion-icon name="recording-outline"></ion-icon>
                        </span>
                        <span class="title">Votre avis</span>
                    </a>
                </li>
                
                <li>
                <a href="{{ route('user') }}">
                        <span class="icon">
                        <ion-icon name="aperture-outline"></ion-icon>
                            
                        </span>
                        <span class="title">Gestions utilisateurs</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('profile.edit')}}">
                        <span class="icon">
                        <ion-icon name="settings-outline"></ion-icon>
                        </span>
                        <span class="title">Paramètres</span>
                    </a>
                </li>
            </ul>
        </div> 
</aside>