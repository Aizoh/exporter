<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

{{-- 
        <style>
            
                .dt-buttons {
                    display: none;
                }
                .pull-left ul {
                    list-style: none;
                    margin: 0;
                    padding-left: 0;
                }
                .pull-left a {
                    text-decoration: none;
                    color: #ffffff;
                }
                .pull-left li {
                    color: #ffffff;
                    background-color: #2f2f2f;
                    border-color: #2f2f2f;
                    display: block;
                    float: left;
                    position: relative;
                    text-decoration: none;
                    transition-duration: 0.5s;
                    padding: 12px 30px;
                    font-size: .75rem;
                    font-weight: 400;
                    line-height: 1.428571;
                }
                .pull-left li:hover {
                    cursor: pointer;
                }
                .pull-left ul li ul {
                    visibility: hidden;
                    opacity: 0;
                    min-width: 9.2rem;
                    position: absolute;
                    transition: all 0.5s ease;
                    margin-top: 8px;
                    left: 0;
                    display: none;
                }
                .pull-left ul li:hover>ul,
                .pull-left ul li ul:hover {
                    visibility: visible;
                    opacity: 1;
                    display: block;
                }
                .pull-left ul li ul li {
                    clear: both;
                    width: 100%;
                    color: #ffffff;
                }
                .ul-dropdown {
                    margin: 0.3125rem 1px !important;
                    outline: 0;
                }
                .firstli {
                    border-radius: 0.2rem;
                }
                .firstli .material-icons {
                    position: relative;
                    display: inline-block;
                    top: 0;
                    margin-top: -1.1em;
                    margin-bottom: -1em;
                    font-size: 0.8rem;
                    vertical-align: middle;
                    margin-right: 5px;
                }

        </style> --}}

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


        <!-- DataTable -->
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

        <!--data table corrected -->
        
        <!-- DataTables Core CSS -->
        <link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet">

        <!-- DataTables Bootstrap 4 CSS (optional, if you use Bootstrap) -->
        <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet">

        <!-- DataTables Core JS -->
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>

        <!-- DataTables Bootstrap 4 JS (optional, if you use Bootstrap) -->
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

        <!-- DataTables Buttons extension JS and CSS -->
        <link href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css" rel="stylesheet">
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
            </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            {{-- @include('layouts.navigation') --}}
            

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{-- {{ $header }} --}}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>    

    </body>
</html>
