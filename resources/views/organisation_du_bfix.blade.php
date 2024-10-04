<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Organisation du BFIX</title>
        <link href="https://fonts.googleapis.com/css2?family=Human+Sans&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style>
            
            footer{
                box-shadow: -2px -0px 4px black;
            }
            .img{
                border-radius: 20px
            }
            .img {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            transform: scale(1);
            }

            .img:hover {
                transform: scale(1.05);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            }
        </style>
    </head>
    <body >
        @include("header");
        <br>
        <br>
        <div class="container" style="padding: 5%">
            <div class="row align-items-start">
                <div class="col">
                <h1 style="color: rgb(0, 178, 42);"><strong>LA GOUVERNANCE DU BFIX</strong></h1>
                <br>
                </div>
                <p class="text-break fs-5" style="font-family: sans-serif;">L’association BFIX est dotée de trois ( 3 ) organes en charge d’assurer son fonctionnement .Ces organes sont :</p>
                <p class="text-break fs-6" style="font-family: sans-serif;">  <span> &rarr; </span> L’Assemblée Générale des membres(AG);</p>
                <p class="text-break fs-6" style="font-family: sans-serif;">  <span> &rarr; </span>Le Conseil d’administration(CA);</p>
                <p class="text-break fs-6" style="font-family: sans-serif;">  <span> &rarr; </span>Et le Bureau Exécutif ou Direction exécutive.</p>
                <p class="text-break fs-5" style="font-family: sans-serif;">L'organigramme du BFIX est le suivant :</p>
            </div>
            <br>


        </div>
        <br>
        <br>
        <div class="container text-center">
            <div  >
            <img src="{{ asset('images/org.jpg') }}" class="img-fluidn img" alt="organisation" width="70%" style="box-shadow: 1px 1px 3px, -1px -1px 3px rgb(255, 255, 255); ">

            </div>

        </div>
        <br>
        <br>
        <footer class="py-3 bg-light mt-auto" style="padding: 5%; ">
            <p class="text-center text-muted mb-0">&copy; Copyright 2024 - BFIX. All rights reserved. Designed With BFIX TEAM.</p>
        </footer>
    </body>
</html>
