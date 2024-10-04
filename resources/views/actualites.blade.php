<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Actualité</title>
        <link href="https://fonts.googleapis.com/css2?family=Human+Sans&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js"></script>


        <style>


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
            .monButton{
                border-radius: 50px;
                padding: 10px ;
                padding-left: 15px ;
                padding-right: 15px ;
             }


        </style>
    </head>
    <body >

        @include("header");
        <div class="container">


            <div class="align-items-start row" >
                @foreach($actualites as $actualite)


                    <div class="card  " style="width: 25rem; margin:1%">
                        @if($actualite->image)
                            <img src="{{asset('storage/' .$actualite->image) }}" alt="Image actu" class="card-img-top">
                        @endif
                        <p style="color: rgb(0, 0, 0); font-size:10px">
                            {{ $actualite->created_at }}
                        </p>
                        <div class="card-body">



                            <h5 class="card-title">{{ $actualite->titre }}</h5>

                            <button id="" class="btn  monButton fs-5" style="color: rgb(255, 255, 255); background-color: rgb(0, 178, 42);" data-bs-toggle="modal" data-bs-target="#t{{ $actualite->id }}">
                                Lire le contenue
                                <span id="arrowIconA" class="arrow-iconA"> &rarr; </span>
                            </button>

                        </div>
                    </div>

                    <div class="modal fade" id="t{{ $actualite->id }}" tabindex="-1" aria-labelledby="et{{ $actualite->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="et{{ $actualite->id }}">{{ $actualite->titre }}</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                {{ $actualite->contenue }}
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            </div>
                        </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>











        <div class="modal fade" id="demande" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">

            <div class="modal-dialog modal-dialog-scrollable " style="max-width: 80%">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: rgb(0, 178, 42)">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel" style="color: white"><strong>Envoyez une demande de création de compte</strong></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="color: white"></button>
                      </div>

                    <div class="modal-body">
                        <div class="container text-center">
                            <div class="  border-0 shadow-lg my-5">
                                <div class="card-body p-0">
                                    <!-- Nested Row within Card Body -->
                                    <div class="row align-items-center">
                                        <div class="col-lg-5 d-none d-lg-block bg-register-image">
                                            <img src="{{ asset('images/register.png') }}" class="img-fluid image_bfix imgG" alt="image_bfix" width="">

                                        </div>
                                        <div class="col-lg-7">
                                            <div class="p-5">


                                                <form class="user" action="/demande/envoie" method="POST">
                                                    @csrf
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 mb-3 mb-sm-0" style="padding: 5px">
                                                            <input type="text" class="form-control form-control-user" name="nom" placeholder="Nom" required>
                                                        </div>
                                                        <div class="col-sm-6" style="padding: 5px">
                                                            <input type="text" class="form-control form-control-user" name="prenom" placeholder="Prenom" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" style="padding: 5px">
                                                        <input type="email" class="form-control form-control-user" name="email" placeholder="Adresse Email" required>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 mb-3 mb-sm-0" style="padding: 5px">
                                                            <input type="text" class="form-control form-control-user" name="nom_service" placeholder="Service" required>
                                                        </div>
                                                        <div class="col-sm-6" style="padding: 5px">
                                                            <input type="number" class="form-control form-control-user" name="id_service" placeholder="Identifiant" required>
                                                        </div>
                                                    </div>
                                                    <button type="submit" class="btn bregister">
                                                        Envoyer la Demande
                                                    </button>
                                                </form>
                                                                                        <hr>
                                                <div class="text-center">
                                                    <a class="small" href="forgot-password.html">Mot de passe oublié?</a>
                                                </div>
                                                <div class="text-center">
                                                    <a class="small" href="">Déja un compte? Se Connexion!</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
          </div>


        <footer class="py-3 bg-light mt-auto" style="padding: 5%">
            <p class="text-center text-muted mb-0">&copy; Copyright 2024 - BFIX. All rights reserved. Designed With BFIX TEAM.</p>
        </footer>
    </body>

</html>
