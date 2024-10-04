<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Notre équipe</title>
        <link href="https://fonts.googleapis.com/css2?family=Human+Sans&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style>
            
            footer{
                box-shadow: -2px -0px 4px black;
            }

            .card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            transform: scale(1);
            }

            .card:hover {
                transform: scale(1.05);
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            }
        </style>
    </head>
    <body >
        @include("header");

        <div class="container content" style="padding: 5%">
            <div class="row align-items-start">
                <div class="col">
                <h1 style="color: rgb(0, 178, 42)"><strong>Equipe du BFIX</strong></h1>
                <br>
                </div>
                <p class="text-break fs-5" style="font-family: sans-serif;">L'équipe est constitué du bureau exécutif du BFIX est composé comme suit :</p>

            </div>
            <table class="table table-striped">

                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Jean Baptiste</td>
                    <td>MILLOGO</td>
                    <td>Directeur Exécutif</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Lawakilia Wilfried</td>
                    <td>DRABO</td>
                    <td>Directeur Technique</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Koudoussou</td>
                    <td>OUATTARA</td>
                    <td>Ingénieur réseaux et systèmes.</td>
                  </tr>
                </tbody>
            </table>


        </div>

        <div>

            <div class="container text-center" style="padding: 30px">
                <div class="row text-center">
                    <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
                    <div class="card " style="border: none;  width: 80%;">
                        <div class="card-header" style="border: none;">
                            <h5 style="color: rgb(71, 71, 71);"><strong>Directeur Exécutif du BFIX</strong></h5>

                        </div>
                        <div class="card-body">
                        <img src="{{ asset('images/e1.png') }}" class="img-fluid" alt="image_bfix">
                        </div>
                        <div class="card-footer" style="border: none;">
                            <h5 style="color: rgb(71, 71, 71);">Jean Baptiste MILLOGO</h5>

                        </div>
                    </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
                    <div class="card " style="border: none; width: 80%;">
                        <div class="card-header" style="border: none;">
                            <h5 style="color: rgb(71, 71, 71);"><strong>Directeur Technique du BFIX</strong></h5>

                        </div>
                        <div class="card-body">
                        <img src="{{ asset('images/e2.png') }}" class="img-fluid" alt="image_bfix">
                        </div>
                        <div class="card-footer" style="border: none;">
                            <h5 style="color: rgb(71, 71, 71);">Lawakilia Wilfried DRABO</h5>

                        </div>
                    </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
                    <div class="card " style="border: none;  width: 80%;">
                        <div class="card-header" style="border: none;">
                            <h5 style="color: rgb(71, 71, 71);"><strong>Ingénieur réseaux et systèmes</strong></h5>

                        </div>
                        <div class="card-body">
                        <img src="{{ asset('images/e3.png') }}" class="img-fluid" alt="image_bfix">
                        </div>
                        <div class="card-footer" style="border: none;">
                            <h5 style="color: rgb(71, 71, 71);">Koudoussou OUATTARA</h5>

                        </div>
                    </div>
                    </div>


            </div>

        </div>

        <footer class="py-3 bg-light mt-auto" style="padding: 5%; ">
            <p class="text-center text-muted mb-0">&copy; Copyright 2024 - BFIX. All rights reserved. Designed With BFIX TEAM.</p>
        </footer>
    </body>
</html>
