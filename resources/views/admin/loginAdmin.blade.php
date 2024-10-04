<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link href="https://fonts.googleapis.com/css2?family=Human+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>
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

            <form class="user" action="/createAdmin" method="POST" >
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
                <div class="form-group" style="padding: 5px">
                    <label for="exampleSelect">Choisissez un Role :</label>
                    <select class="form-control form-control-user" id="role" name="role">
                        <option value="option1">super</option>
                        <option value="option2">simple</option>
                    </select>
                </div>

                <button type="submit" class="btn bregister">
                    valider
                </button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
