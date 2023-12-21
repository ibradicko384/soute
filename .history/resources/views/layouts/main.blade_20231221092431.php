<!DOCTYPE html>
<html lang="fr">
<head>
    <!-- ... Vos autres balises head ... -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('DataTables/datatables.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body>
    <header>
        @include('layouts.navbar-left') 
    </header> 
    <main>
        <div class="main">
            <div class="row">
                <div class="col">
                    @include('layouts.top-navbar') 
                </div>
                <div class="col pt-3">
                    @yield('body')
                </div>
            </div>
        </div>
    </main>
    <footer>
        @include('layouts.footer') 
    </footer>
    <script src="{{asset('DataTables/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('DataTables/datatables.js')}}"></script>
    <script src="{{asset('js/datatable.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
