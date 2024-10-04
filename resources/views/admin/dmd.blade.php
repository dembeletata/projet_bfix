<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>admin</title>
        <link href="https://fonts.googleapis.com/css2?family=Human+Sans&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <style>
        * {
        font-family: 'Human Sans', sans-serif;
        }
        .bdash{
        color: rgba(221, 221, 221, 0.879);
        border: none;
        padding: 10px;
        font-size: 15px;
        margin-bottom: 30px;

        }
        .bdash:hover{
            color: rgb(255, 255, 255);
        }
        .scrollable-container {
            height: 400px;
            overflow-y: auto;

        }

        .message{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            padding: 3%;
            flex-wrap: wrap;
        }
        .mass{
            display: flex;
            flex-direction: column;
            justify-content: space-around;
            padding: 3%;
            margin: 3%;
            background-color: rgb(0, 128, 255); font-size:20px;
            border-radius: 20px;

        }
        .mss{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }
        .mssbox{
            display: flex;
            flex-direction: row;
        }
        .btnm{
            color: rgb(0, 128, 255);
            background-color: white;
            padding: 2px;
            border-radius: 50px;
            width: 100px;
            border: none;
            font-size: 15px;
        }

    </style>
    <body >

        <div class="row ">
            <div class="col-2 shadow-lg align-items-center" style="height: 100vh; background-color: rgba(0, 0, 0, 0.95)" >
                <img src="{{ asset('images/admin.png') }}" class="img-fluid image_bfix imgG" alt="image_bfix" width="150" style="">
                <hr class="border border-1 " style="border: 1px solid white">
              <nav id="navbar-example3" class="align-items-center flex-column align-items-stretch pe-4 " style="padding-left: 20px; margin-top:20px">


                <a class="nav-link" href="/admin" role="button" data-bs-toggle="" aria-expanded="false" style="color: white">
                    <button type="button" class="dropdown-item btn bdash align-items-center" data-bs-toggle="modal" data-bs-target="#" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                            <path d="M1 2.5A1.5 1.5 0 0 1 2.5 1h3A1.5 1.5 0 0 1 7 2.5v3A1.5 1.5 0 0 1 5.5 7h-3A1.5 1.5 0 0 1 1 5.5zm8 0A1.5 1.5 0 0 1 10.5 1h3A1.5 1.5 0 0 1 15 2.5v3A1.5 1.5 0 0 1 13.5 7h-3A1.5 1.5 0 0 1 9 5.5zm-8 8A1.5 1.5 0 0 1 2.5 9h3A1.5 1.5 0 0 1 7 10.5v3A1.5 1.5 0 0 1 5.5 15h-3A1.5 1.5 0 0 1 1 13.5zm8 0A1.5 1.5 0 0 1 10.5 9h3a1.5 1.5 0 0 1 1.5 1.5v3a1.5 1.5 0 0 1-1.5 1.5h-3A1.5 1.5 0 0 1 9 13.5z"/>
                        </svg>
                        Tableau de bord
                        <hr class="border border-1 " style="border: 1px solid white">

                    </button>
                </a>

                <a class="nav-link" href="/admin/dmd" role="button" data-bs-toggle="" aria-expanded="false" style="color: white">
                    <button type="button" class="dropdown-item btn  align-items-center" data-bs-toggle="modal" data-bs-target="#" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                            <path d="M4 0h5.293A1 1 0 0 1 10 .293L13.707 4a1 1 0 0 1 .293.707V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2m5.5 1.5v2a1 1 0 0 0 1 1h2z"/>
                        </svg>
                        Demande de compte
                        <hr class="border border-1 " style="border: 1px solid white">

                    </button>
                </a>

                <a class="nav-link" href="" role="button" data-bs-toggle="" aria-expanded="false" style="color: white">
                    <button type="button" class="dropdown-item btn bdash align-items-center" data-bs-toggle="modal" data-bs-target="#" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2zm4.5 0a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6m5 2.755C12.146 12.825 10.623 12 8 12s-4.146.826-5 1.755V14a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1z"/>
                        </svg>
                        Creation d'utilisateur
                        <hr class="border border-1 " style="border: 1px solid white">

                    </button>
                </a>

                <a class="nav-link" href="/admin/message" role="button" data-bs-toggle="" aria-expanded="false" style="color: white">
                    <button type="button" class="dropdown-item btn bdash align-items-center" data-bs-toggle="modal" data-bs-target="#" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>

                        </svg>
                        Message
                        <hr class="border border-1 " style="border: 1px solid white">

                    </button>
                </a>
                <a class="nav-link" href="/admin/actualite" role="button" data-bs-toggle="" aria-expanded="false" style="color: white">
                    <button type="button" class="dropdown-item btn bdash align-items-center" data-bs-toggle="modal" data-bs-target="#" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                            <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm6.258-6.437a.5.5 0 0 1 .507.013l4 2.5a.5.5 0 0 1 0 .848l-4 2.5A.5.5 0 0 1 6 12V7a.5.5 0 0 1 .258-.437"/>
                        </svg>
                        Médias
                        <hr class="border border-1 " style="border: 1px solid white">

                    </button>
                </a>
                <a class="nav-link" href="/admin/service" role="button" data-bs-toggle="" aria-expanded="false" style="color: white">
                    <button type="button" class="dropdown-item btn bdash align-items-center" data-bs-toggle="modal" data-bs-target="#" >
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-grid-fill" viewBox="0 0 16 16">
                            <path d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6zm6.258-6.437a.5.5 0 0 1 .507.013l4 2.5a.5.5 0 0 1 0 .848l-4 2.5A.5.5 0 0 1 6 12V7a.5.5 0 0 1 .258-.437"/>
                        </svg>
                        Service
                        <hr class="border border-1 " style="border: 1px solid white">

                    </button>
                </a>





              </nav>
            </div>
                <div class=" fixed-top shadow-lg  align-items-center">
                    <p class="" style="padding: 5px; font-size: 25px; margin-left:250px; margin-top:5px; color:rgb(123, 123, 123)">Les demandes de création de compte</p>
                </div>



            <div id="d" class="col-10" style="background-color: rgb(234, 234, 234)" >
                <br>
                <br>
                <br>
                <br>

                @if(session('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                @endif

                <div class="d-inline-flex gap-1  d-flex justify-content-around">
                    <div  class="shadow-lg align-items-center" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="border-radius: 10px; padding:40px; background-color: white; color: rgb(0, 128, 255); font-size:20px; border-left: 5px solid rgb(0, 128, 255); margin-left: 25px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-file-earmark-plus-fill" viewBox="0 0 16 16">
                            <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0M9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1M8.5 7v1.5H10a.5.5 0 0 1 0 1H8.5V11a.5.5 0 0 1-1 0V9.5H6a.5.5 0 0 1 0-1h1.5V7a.5.5 0 0 1 1 0"/>
                          </svg>
                        Nouvelles Demandes
                    </div>
                    <div  class="shadow-lg align-items-center" data-bs-toggle="collapse" href="#accepte" role="button" aria-expanded="false" aria-controls="collapseExample" style="border-radius: 10px; padding:40px; background-color: white; color: rgb(0, 178, 42); font-size:20px; border-left: 5px solid rgb(0, 178, 42); margin-left: 90px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-hand-thumbs-up-fill" viewBox="0 0 16 16">
                            <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a10 10 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733q.086.18.138.363c.077.27.113.567.113.856s-.036.586-.113.856c-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.2 3.2 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.8 4.8 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                          </svg>
                        Demandes Acceptées
                    </div>
                    <div  class="shadow-lg align-items-center" data-bs-toggle="collapse" href="#refuse" role="button" aria-expanded="false" aria-controls="collapseExample" style="border-radius: 10px; padding:40px; background-color: white; color: rgb(255, 0, 0); font-size:20px; border-left: 5px solid rgb(255, 0, 0); margin-left: 90px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-hand-thumbs-down-fill" viewBox="0 0 16 16">
                            <path d="M6.956 14.534c.065.936.952 1.659 1.908 1.42l.261-.065a1.38 1.38 0 0 0 1.012-.965c.22-.816.533-2.512.062-4.51q.205.03.443.051c.713.065 1.669.071 2.516-.211.518-.173.994-.68 1.2-1.272a1.9 1.9 0 0 0-.234-1.734c.058-.118.103-.242.138-.362.077-.27.113-.568.113-.856 0-.29-.036-.586-.113-.857a2 2 0 0 0-.16-.403c.169-.387.107-.82-.003-1.149a3.2 3.2 0 0 0-.488-.9c.054-.153.076-.313.076-.465a1.86 1.86 0 0 0-.253-.912C13.1.757 12.437.28 11.5.28H8c-.605 0-1.07.08-1.466.217a4.8 4.8 0 0 0-.97.485l-.048.029c-.504.308-.999.61-2.068.723C2.682 1.815 2 2.434 2 3.279v4c0 .851.685 1.433 1.357 1.616.849.232 1.574.787 2.132 1.41.56.626.914 1.28 1.039 1.638.199.575.356 1.54.428 2.591"/>
                          </svg>
                        Demandes Refusées
                    </div>
                </div>
                <div  class="collapse " id="collapseExample" style="padding: 25px; padding-right:100px"  data-bs-parent="#d">
                    <div class=" scrollable-container flex-wrap" >
                        <h4 style="color: rgb(0, 128, 255)">Nouveaux Messages</h4>
                        <div class=" message  ">
                            @foreach($demandes as $demande)
                            @if($demande->status === null)
                            <form action="{{ route('demandes.valider', ['id_demande' => $demande->id_demande]) }}" method="POST">                                    @csrf

                                    <input type="hidden" name="id_demande" value="{{ $demande->id_demande }}">
                                    <div class="mass " style="width: 400px">
                                        <div class="row mss" style="width: 400px">
                                            <div class="col">
                                                <h5 style="color: white">{{$demande->nom}} {{$demande->prenom}}</h5>
                                                <div>
                                                    <p style="color: white; font-size:10px; margin-top: -5px">{{ $demande->email }}</p>
                                                </div>
                                            </div>
                                            <div class="col align-items-center">
                                                <p style="color: white; font-size:15px">
                                                    {{ $demande->created_at }}
                                                </p>
                                            </div>
                                            <hr class="border border-1 " style="border: 1px solid white; margin-top: -10px">
                                        </div>
                                        <div class="row mss" style="width: 400px">
                                            <div class="col">
                                                <h6 style="color: white">Service : {{ $demande->nom_service }}</h6>
                                            </div>
                                            <div class="col">
                                                <h6 style="color: white">Identifiant : {{ $demande->id_service }}</h6>
                                            </div>
                                        </div>
                                        <div class=" mssbox" style="width: 400px">
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="action" value="accepter" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1" style="color: rgb(0, 255, 60); font-size:15px">Accepter</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" class="form-check-input" name="action" value="refuser" id="exampleCheck2">
                                                <label class="form-check-label" for="exampleCheck2" style="color: red; font-size:15px">Refuser</label>
                                            </div>
                                            <button type="submit" class="btnm">Valider</button>
                                        </div>
                                    </div>
                                </form>
                                @endif
                            @endforeach

                        </div>


                    </div>
                </div>
                <div  class="collapse " id="accepte" style="padding: 25px; padding-right:100px"  data-bs-parent="#d">
                    <div class=" scrollable-container flex-wrap" >
                        <h4 style="color: rgb(0, 178, 42)">Messages Acceptés</h4>

                        <div class=" message  ">
                            @foreach($demandes as $demande)
                            @if($demande->status === "acceptée")
                            <form action="{{ route('demandes.valider', ['id_demande' => $demande->id_demande]) }}" method="POST">                                    @csrf

                                    <input type="hidden" name="id_demande" value="{{ $demande->id_demande }}">
                                    <div class="mass " style="width: 400px">
                                        <div class="row mss" style="width: 400px">
                                            <div class="col">
                                                <h5 style="color: white">{{$demande->nom}} {{$demande->prenom}}</h5>
                                                <div>
                                                    <p style="color: white; font-size:10px; margin-top: -5px">{{ $demande->email }}</p>
                                                </div>
                                            </div>
                                            <div class="col align-items-center">
                                                <p style="color: white; font-size:15px">
                                                    {{ $demande->created_at }}
                                                </p>
                                            </div>
                                            <hr class="border border-1 " style="border: 1px solid white; margin-top: -10px">
                                        </div>
                                        <div class="row mss" style="width: 400px">
                                            <div class="col">
                                                <h6 style="color: white">Service : {{ $demande->nom_service }}</h6>
                                            </div>
                                            <div class="col">
                                                <h6 style="color: white">Identifiant : {{ $demande->id_service }}</h6>
                                            </div>
                                        </div>
                                        <div class=" mssbox" style="width: 400px">
                                            <div class="form-check align-items-center">

                                                <h5 style="color: rgb(0, 255, 60)">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check2-square" viewBox="0 0 16 16" style="color: rgb(0, 255, 60) ">
                                                        <path d="M3 14.5A1.5 1.5 0 0 1 1.5 13V3A1.5 1.5 0 0 1 3 1.5h8a.5.5 0 0 1 0 1H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V8a.5.5 0 0 1 1 0v5a1.5 1.5 0 0 1-1.5 1.5z"/>
                                                        <path d="m8.354 10.354 7-7a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0"/>
                                                    </svg>
                                                    Demande acceptée
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @endif
                            @endforeach

                        </div>


                    </div>
                </div>
                <div  class="collapse " id="refuse" style="padding: 25px; padding-right:100px"  data-bs-parent="#d">
                    <div class=" scrollable-container flex-wrap" >
                        <h4 style="color: rgb(255, 0, 0)">Messages Refusés</h4>

                        <div class=" message  ">
                            @foreach($demandes as $demande)
                            @if($demande->status === "refusée")
                            <form action="{{ route('demandes.valider', ['id_demande' => $demande->id_demande]) }}" method="POST">                                    @csrf

                                    <input type="hidden" name="id_demande" value="{{ $demande->id_demande }}">
                                    <div class="mass " style="width: 400px">
                                        <div class="row mss" style="width: 400px">
                                            <div class="col">
                                                <h5 style="color: white">{{$demande->nom}} {{$demande->prenom}}</h5>
                                                <div>
                                                    <p style="color: white; font-size:10px; margin-top: -5px">{{ $demande->email }}</p>
                                                </div>
                                            </div>
                                            <div class="col align-items-center">
                                                <p style="color: white; font-size:15px">
                                                    {{ $demande->created_at }}
                                                </p>
                                            </div>
                                            <hr class="border border-1 " style="border: 1px solid white; margin-top: -10px">
                                        </div>
                                        <div class="row mss" style="width: 400px">
                                            <div class="col">
                                                <h6 style="color: white">Service : {{ $demande->nom_service }}</h6>
                                            </div>
                                            <div class="col">
                                                <h6 style="color: white">Identifiant : {{ $demande->id_service }}</h6>
                                            </div>
                                        </div>
                                        <div class=" mssbox" style="width: 400px">
                                            <div class="form-check align-items-center">

                                                <h5  style="color: red">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-file-earmark-excel" viewBox="0 0 16 16" style="color: red">
                                                        <path d="M5.884 6.68a.5.5 0 1 0-.768.64L7.349 10l-2.233 2.68a.5.5 0 0 0 .768.64L8 10.781l2.116 2.54a.5.5 0 0 0 .768-.641L8.651 10l2.233-2.68a.5.5 0 0 0-.768-.64L8 9.219l-2.116-2.54z"/>
                                                        <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
                                                      </svg>
                                                    Demande refusée
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                @endif
                            @endforeach

                        </div>


                    </div>
                </div>
            </div>
    </body>

</html>
