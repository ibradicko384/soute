<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plateforme aide ménagère</title>

    <!-- Inclure les feuilles de style -->
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

    <!-- Inclure les scripts jQuery et Bootstrap -->
    <script src="{{asset('DataTables/jquery-3.6.0.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Inclure les scripts DataTables et les boutons DataTables -->
    <script src="{{asset('DataTables/datatables.js')}}"></script>
    <script src="{{asset('DataTables/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('DataTables/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('DataTables/jszip.min.js')}}"></script>
    <script src="{{asset('DataTables/pdfmake.min.js')}}"></script>
    <script src="{{asset('DataTables/vfs_fonts.js')}}"></script>

    <!-- Inclure vos scripts personnalisés -->
    <script src="{{asset('js/datatable.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

    <!-- Inclure les icônes Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>
