<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Accords du PEERING</title>
        <link href="https://fonts.googleapis.com/css2?family=Human+Sans&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style>

            .arrow-iconA {
                display: none;
            }
            .arrow-iconA.visible {
                display: inline-block;
            }
            .monButton{
                border-radius: 50px;
                padding: 10px ;
                padding-left: 15px ;
                padding-right: 15px ;
             }
            footer{
                box-shadow: -2px -0px 4px black;
            }


        </style>
    </head>
    <body >
        @include("header");
        <br>
        <br>
        <br>

        <div class="container" style="padding: 5%">
            <h1 style="color: rgb(0, 178, 42);"><strong>Accord de Peering</strong></h1>
            <br>
            <p>
                Le soussigné confirme la participation du réseau mentionné ci-dessous dans le , et
                certifie que les exigences techniques, organisationnelles et commerciales énumérées
                dans ce document sont acceptées et seront respectées.
            </p>
            <h3>A. Les pré-requis techniques</h3>
            <p>
                1. Les participants doivent disposer d'un espace de rack 2U. Les participants qui
                souhaitent utiliser un espace d'entreposage supplémentaire doivent obtenir le
                consentement écrit de l'équipe de gestion de l '.
            </p>
            <br>
            <h3>TITRE II : CONDITIONS D'ADHÉSION</h3>
            
            <p>
                2. Tous les équipements des participants doivent être montés en rack et installés dans
                l'espace de racks désigné par le participant. Tout équipement qui ne peut pas être
                monté en rack doit être spécifiquement approuvé par écrit par l'équipe de gestion
                avant l'installation. Tout équipement autre que ceux mentionnés doit être retiré sans
                avertissement.
            </p>
            <button data-bs-toggle="collapse" href="#regle" aria-expanded="false" id="toggleButtonA" class="btn  monButton fs-5" style="color: rgb(255, 255, 255); background-color: rgb(0, 178, 42);" >
                Lire la suite
                <span id="arrowIconA" class="arrow-iconA"> &rarr; </span>
            </button>
            <br>
            <br>
            <div  class="collapse " id="regle" style="" >

                <iframe src="{{ asset('pdf/ACCORD_DE_PEERING.pdf') }}" width="100%" height="800px">   </iframe>

            </div>
        </div>


        <footer class="py-3 bg-light mt-auto" style="padding: 5%; ">
            <p class="text-center text-muted mb-0">&copy; Copyright 2024 - BFIX. All rights reserved. Designed With BFIX TEAM.</p>
        </footer>
    </body>
</html>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButtonA = document.getElementById('toggleButtonA');
        const arrowIconA = document.getElementById('arrowIconA');

        toggleButtonA.addEventListener('mouseover', function() {
            arrowIconA.classList.add('visible');
        });

        toggleButtonA.addEventListener('mouseout', function() {
            arrowIconA.classList.remove('visible');
        });
    });

  </script>

