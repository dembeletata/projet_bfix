<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Acceuil</title>
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




            {{-- @foreach ($demandes->all() as $demande )
                <li class="alert alert-danger">{{$demande}}</li>
             @endforeach --}}



        <div class="container ">
            <div class="row align-items-start">
                <div class="col">
                <h1 style="color: rgb(0, 178, 42)"><strong>A PROPOS DU BFIX</strong></h1>
                <br>
                </div>
                <p class="text-break fs-5" style="font-family: sans-serif;">Burkina Faso Internet eXchange Point, en abrégé BFIX, est un Point d’échange Internet du Burkina Faso, situé au cœur de l’Afrique de l’Ouest. </p>
                <p class="text-break fs-5" style="font-family: sans-serif;">BFIX désigne également l’Association mise en place le 19 février 2015 par les fournisseurs d’accès internet y compris les opérateurs de télécommunications et certaines structures publiques telles que l’Université de Ouagadougou et l’Agence Nationale de Promotion des Technologies de l’Information et de la Communication (ANPTIC). Elle est régie par la loi n° 10-92 ADP du 15/12/1992 du Burkina Faso portant liberté d’association. </p>
                <p class="text-break fs-5" style="font-family: sans-serif;">Les échanges de trafic au plan technique ont été initiés le 26 juin 2015, lors de la 11ème édition de la Semaine Nationale de l’Internet et l’inauguration officielle de l’infrastructure a été faite le 10 juillet 2018 dans les cadre du lancement des projets financés par la Banque Mondiale dans le cadre du PRICAO au Burkina Faso.</p>
            </div>
            <br>


            <div class="container " style="padding: 5%">
                <div class="row">
                    <div class="col">
                    <h2 style="color: rgb(0, 178, 42);"> <strong>Faciliter la connectivité entre les différents réseaux.</strong></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-12" style="padding: 5%;">
                        <img src="{{ asset('images/globe2.png') }}" class="img-fluid image_bfix img" alt="image_bfix">
                    </div>

                    <div class="col-md-6 col-sm-12" style="padding: 5%;">
                        <h3 style="color: rgb(0, 178, 42);"><strong>C'est quoi un point IXP.</strong></h3>
                        <br>
                        <p class="text-break fs-6" style="font-family: sans-serif;">Un point d'échange Internet (IXP) est une infrastructure physique qui permet à plusieurs fournisseurs de services Internet (ISP), fournisseurs de contenu et autres organisations, d'échanger du trafic Internet entre leurs réseaux (systèmes autonomes).</p>
                        <br>

                        <a href="https://youtu.be/TKNQ1lgguM8">
                            <button id="toggleButtonA" class="btn  monButton fs-5" style="color: rgb(255, 255, 255); background-color: rgb(0, 178, 42);">
                                Apprendre encore plus
                                <span id="arrowIconA" class="arrow-iconA"> &rarr; </span>
                            </button>

                        </a>
                    </div>
                </div>

            </div>

        </div>



        <footer class="py-3 bg-light mt-auto" style="padding: 5%">
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
