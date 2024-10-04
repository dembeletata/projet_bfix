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

            .fermer{
                display: none;
            }
        </style>
    </head>
    <body >

        @include("header");

        <br>
        <br>
        <br>
        <br>
        <br>

                        <div class="container text-center" style="margin-top: -150px" >
                            <div class="  border-0 shadow-lg my-5" style="border-radius: 25px">
                                <div class="card-body p-0">

                                    <div class="row align-items-center">
                                        <div class="col-lg-5 d-none d-lg-block bg-register-image">
                                            <img src="{{ asset('images/aut.png') }}" class="img-fluid image_bfix imgG" alt="image_bfix" width="">

                                        </div>
                                        <div class="col-lg-7">
                                            <div class="p-5">

                                                @if(session('alert'))
                                                <div class="alert alert-danger">
                                                    {{ session('alert') }}
                                                </div>
                                                @endif
                                                <form class="user" action="/log" method="POST" >
                                                    @csrf
                                                    <div class="form-group" style="padding: 5px">
                                                        <select class="form-control" name="service" required>
                                                            <option value="">Sélectionner un service</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->service }}">{{ $category->service }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col-sm-6 mb-3 mb-sm-0" style="padding: 5px">
                                                            <input type="text" class="form-control form-control-user" name="pseudo" placeholder="Pseudo"  required>
                                                        </div>
                                                        <div class="col-sm-6" style="padding: 5px">
                                                            <input type="password" class="form-control form-control-user" name="motDePasse" placeholder="Mot de passe" required>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn bregister">
                                                        Se Connecter
                                                    </button>
                                                </form>

                                                                                        <hr>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>






    </body>

</html>
