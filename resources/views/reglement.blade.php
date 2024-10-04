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
        <div class="container" style="padding: 5%">
            <h1 style="color: rgb(0, 178, 42);"><strong>LE REGLEMENT INTERIEUR DU BFIX</strong></h1>
            <br>
            <h2>TITRE I: GENERALITES</h2>
            <h3>Article 1: Objet - Champs d'application</h3>
            <p>
                Ce Règlement Intérieur a pour objet de compléter et préciser les statuts de
                l'Association Burkina Faso Internet Exchange Point (BFIX). Il s'applique
                obligatoirement à l'ensemble des membres de l'association, ainsi qu'à chaque nouvel
                adhérent. Il est permanemment disponible au siège de l'Association et sur le site
                internet de l'association. Une copie doit être remise à chaque nouvel adhérent qui en
                fait la demande. Les dispositions du présent règlement intérieur doivent être
                interprétées à la lumière des statuts. En cas d'ambiguïté ou de contradiction,
                primauté est donnée aux dispositions des statuts.
            </p>
            <br>
            <h2>TITRE II : CONDITIONS D'ADHÉSION</h2>
            <h3>Article 2 : Adhésion de nouveaux membres
            </h3>
            <p>
                Peuvent adhérer à BFIX les entreprises de télécommunication, les fournisseurs d'accès
                internet, les fournisseurs ou producteurs de contenus, les organismes de recherche ou
                d'enseignement privés ou publics exerçant leurs activités au Burkina Faso et
                remplissant l'une des conditions suivantes :
            </p>
            <button data-bs-toggle="collapse" href="#regle" aria-expanded="false" id="toggleButtonA" class="btn  monButton fs-5" style="color: rgb(255, 255, 255); background-color: rgb(0, 178, 42);" >
                Lire la suite
                <span id="arrowIconA" class="arrow-iconA"> &rarr; </span>
            </button>
            <br>
            <br>
            <div  class="collapse " id="regle" style="" >

                <iframe src="{{ asset('pdf/LE_REGLEMENT_INTERIEUR_DU_BFIX.pdf') }}" width="100%" height="800px">   </iframe>

            </div>
        </div>

        <br>
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
