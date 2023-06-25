<?php
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>MR-X</title>
        <!-- Styles -->
        
    </head>
    <body class="">
        @include('components.navbar')

        @incclude('components.loader')

        <div id="content-div">
            @yield('content')
        </div>

        @include('components.footer')
    </body>
</html>
