<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Monitoring</title>
        <link href="https://fonts.googleapis.com/css2?family=Human+Sans&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <style>
            .fermer{
                        display: none;
                    }
                    .arrow-iconA {
                display: none;
            }
            .arrow-iconA.visible {
                display: inline-block;
            }
            .monButton{
                border-radius: 50px;
                padding: 80px ;
                padding-left: 15px ;
                padding-right: 15px ;
             }
        </style>


    </head>
    <body >
        @include("header")
        <div id="d" class="container text-center">
            <div class="row">

                <div class="col-12">

                        @if(session('pseudo'))
                            <form action="{{ route('logo') }}" method="POST">
                                @csrf
                                    <button type="submit" id="" class="btn  monButton fs-5" style="color: rgb(255, 255, 255); background-color: rgb(178, 0, 0);">
                                        Déconnexion
                                    </button>
                            </form>
                        @endif



                    <button id="toggleButtonA" class="btn  monButton fs-5" data-bs-toggle="collapse" href="#monibfix" role="button" aria-expanded="false" aria-controls="collapseExample" style="color: rgb(255, 255, 255); background-color: rgb(0, 178, 42); margin: 10px">
                        Monitoring du Bfix

                    </button>


                    <button id="toggleButtonB" class="btn  monButton fs-5" data-bs-toggle="collapse" href="#moniserv" role="button" aria-expanded="false" aria-controls="collapseExample" style="color: rgb(255, 255, 255); background-color: rgb(0, 178, 42); margin: 10px">
                        Monitoring de Orange Bf
                    </button>


              </div>
            </div>

            <div class="collapse " id="monibfix" style="padding: 25px;"  data-bs-parent="#d">
                <iframe src="{{ asset('https://monitoring.bfix.bf/total/') }}" width="100%" height="800px">   </iframe>

            </div>
            <div class="collapse " id="moniserv" style="padding: 25px; padding-right:100px"  data-bs-parent="#d">

            </div>


          </div>

    </body>

</html>
