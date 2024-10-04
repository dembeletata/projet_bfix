<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Réglement et Statut</title>
        <link href="https://fonts.googleapis.com/css2?family=Human+Sans&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style>

            footer{
                box-shadow: -2px -0px 4px black;
            }


        </style>
    </head>
    <body >
        @include("header");
        <br>
        <br>


        <iframe src="{{ asset('http://bfixmanager.bfix.bf') }}" width="100%" height="800px">   </iframe>



        <br>
        <footer class="py-3 bg-light mt-auto" style="padding: 5%; ">
            <p class="text-center text-muted mb-0">&copy; Copyright 2024 - BFIX. All rights reserved. Designed With BFIX TEAM.</p>
        </footer>
    </body>

</html>
