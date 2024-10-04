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
        .scroll-container {
            display: flex;
            overflow-x: auto; /* Active le scroll horizontal */
            flex-direction: row;
            height: 80%;
            align-items: center

        }

        .scroll-item {
            flex: 0 0 auto; /* Empêche les éléments de rétrécir */
            margin: 30px;
            background-color: #f0f0f0;
            border-radius: 8px;
            display: flex;
            flex-direction: column;

            width: 350px;
            padding: 20px;
            box-shadow: 1px 1px 10px rgb(194, 194, 194), -1px -1px 10px rgb(194, 194, 194);
        }


    </style>
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

        <div class="row">
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
                    <button type="button" class="dropdown-item btn bdash align-items-center" data-bs-toggle="modal" data-bs-target="#" >
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
                    <button type="button" class="dropdown-item btn align-items-center" data-bs-toggle="modal" data-bs-target="#" >
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
                    <p class="" style="padding: 5px; font-size: 25px; margin-left:250px; margin-top:5px; color:rgb(123, 123, 123)">Les Messages des visiteurs</p>
                </div>

            <div class="col-10" style="background-color: rgb(234, 234, 234)" >
                <br><br><br><br>

                <div class="scroll-container">
                    @foreach($contacts as $contact)
                        <div class="scroll-item">

                            <h5 class="">ID{{ $contact->id }} : {{$contact->nom}} {{$contact->prenom}}</h5>
                            <h6 class="">{{$contact->email}}</h6>
                            <br>
                            <h6 class=""><strong>Sujet :</strong> {{$contact->sujet}}</h6>
                            <br>
                            <h6 class=""><strong>Contenue :</strong>
                                <p>
                                    {{$contact->message}}
                                </p>
                            </h6>
                            <p style="font-size: 15px">
                                {{$contact->created_at}}
                            </p>

                            <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer ce message ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger mt-2">Supprimer</button>
                            </form>

                    </div>
                    @endforeach
                </div>




            </div>
    </body>

</html>
