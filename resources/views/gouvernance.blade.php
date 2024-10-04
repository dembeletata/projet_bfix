<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gouvernance du BFIX</title>
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

            .arrow-icon {
                display: none;
            }
            .arrow-icon.visible {
                display: inline-block;
            }
            .monButton{
                border-radius: 50px;
                font-family: sans-serif;
                padding: 5px ;
                padding-left: 15px ;
                padding-right: 15px ;

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
                <p class="text-break fs-5" style="font-family: sans-serif;">  <span> &rarr; </span> L’Assemblée Générale des membres(AG);</p>
                <p class="text-break fs-5" style="font-family: sans-serif;">  <span> &rarr; </span>Le Conseil d’administration(CA);</p>
                <p class="text-break fs-5" style="font-family: sans-serif;">  <span> &rarr; </span>Et le Bureau Exécutif ou Direction exécutive.</p>
                <p class="text-break fs-5" style="font-family: sans-serif;"> <strong>Le Conseil d’Administration :</strong></p>

                <p class="text-break fs-5" style="font-family: sans-serif;">  &nbsp; &nbsp; &nbsp;<span> &rarr; </span>Président,</p>
                <p class="text-break fs-5" style="font-family: sans-serif;">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span> &rarr; </span> <strong>Orange Burkina Faso S.A.</strong> , représentée par <strong>Monsieur Daouda SANOU</strong>, Président du Conseil d’Administration ;</p>

                <p class="text-break fs-5" style="font-family: sans-serif;">  &nbsp; &nbsp; &nbsp;<span> &rarr; </span>Membres :</p>
                <p class="text-break fs-5" style="font-family: sans-serif;">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span> &rarr; </span> <strong>Orange Burkina Faso S.A.</strong> , représentée par <strong>Monsieur Daouda SANOU</strong>, Président du Conseil d’Administration ;</p>
                <p class="text-break fs-5" style="font-family: sans-serif;">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span> &rarr; </span> <strong>Moov Africa Burkina Faso</strong> , représentée par <strong>Monsieur Téné T. DIESSONGO</strong>, Administrateur ;</p>
                <p class="text-break fs-5" style="font-family: sans-serif;">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span> &rarr; </span> <strong>Telecel Faso S.A.</strong> , représentée par <strong>Monsieur Jean-Paul ZOUNGRANA</strong>, Administrateur ;</p>
                <p class="text-break fs-5" style="font-family: sans-serif;">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span> &rarr; </span> <strong>ANPTIC</strong> , représentée par <strong>Monsieur Jean-Armand Yanogo</strong>, Administrateur;</p>
                <p class="text-break fs-5" style="font-family: sans-serif;">  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span> &rarr; </span> <strong>VTS</strong> , représentée par <strong>Monsieur Abdouhramane DIA </strong>, Administrateur;</p>
                <p class="text-break fs-5" style="font-family: sans-serif;">  &nbsp; &nbsp; &nbsp;et le <strong>bureau exécutif</strong> qui constitue l'équipe technique.
                    <a href="/">
                        <button id="toggleButton" class="btn  monButton fs-5" style="color: rgb(255, 255, 255); background-color: rgb(0, 178, 42);">
                            Cliquez ici
                            <span id="arrowIcon" class="arrow-icon"> &rarr; </span>
                        </button>
                    </a>
                </p>

            </div>
       </div>

        <br>
        <footer class="py-3 bg-light mt-auto" style="padding: 5%; ">
            <p class="text-center text-muted mb-0">&copy; Copyright 2024 - BFIX. All rights reserved. Designed With BFIX TEAM.</p>
        </footer>
    </body>
    <script>
                document.addEventListener('DOMContentLoaded', function() {
            const toggleButton = document.getElementById('toggleButton');
            const arrowIcon = document.getElementById('arrowIcon');

            toggleButton.addEventListener('mouseover', function() {
                arrowIcon.classList.add('visible');
            });

            toggleButton.addEventListener('mouseout', function() {
                arrowIcon.classList.remove('visible');
            });
        });

    </script>
</html>
