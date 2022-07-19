<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>

        <title>@yield('titulo')</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/starter-template.css" rel="stylesheet">
        
    </head>
    
    <body>

        <main role="main" class="container">
        @include('layouts.navbarstarter')
        
        <div class="starter-template">

            <h1>@yield('content')</h1>
            <p class="lead">@yield('lead-text')</p>

        </div>

        </main>

        <script src="js/jquery-3.4.1.slim.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        
    </body>

    </html>