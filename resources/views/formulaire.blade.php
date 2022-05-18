<!DOCTYPE html>

<head>
    <title>formulaire</title>
</head>
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.css') }}">

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#"><img src="" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href=" {{url('/')}}">ACCUEIL</a>
                    </li>
                    <li class=" nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{route('formulaire')}}">FORMULAIRE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="{{route('liste')}}">LISTE</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Recherche</button>
                </form>
            </div>
        </div>
    </nav>

    <h1 style="text-align: center;">Formulaire insertion</h1>


    <div class="container">
        <a href="liste">
            <button class="btn btn-danger mb-3">Liste des etudiants</button>
        </a>

        <form method="post" action="{{route('insertion')}}">
            @csrf
            <div class="row">
                <div class="form-group col-lg-12">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="text" class="form-control" name="nom" placeholder="nom">
                </div>

                <div class="form-group col-lg-12">
                    <label for="prenom" class="form-label">Prenom</label>
                    <input type="text" class="form-control" name="prenom" placeholder="nom">
                </div>

            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <label for="age" class="form-label">Age</label>
                    <input type="text" class="form-control" name="age" placeholder="age">
                </div>

                <div class="form-group col-lg-12">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" class="form-control" name="genre" placeholder="genre">
                </div>
                <div class="form-group col-lg-12">
                    <label for="genre" class="form-label">Adresse</label>
                    <input type="text" class="form-control" name="adresse" placeholder="adresse">
                </div>

            </div>
            <div class="row">
                <div class="form-group col-lg-12">
                    <label for="nom" class="form-label">Telephone</label>
                    <input type="telephone" class="form-control" name="telephone" placeholder="telephone">
                </div>

                <div class="form-group col-lg-12">
                    <label for="prenom" class="form-label">email</label>
                    <input type="text" class="form-control" name="mail" placeholder="email">
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-lg-6">
                    <input type="submit" class="btn btn-success" value="valider">
                </div>
                <div class="col-lg-6">
                    <button type="submit" style="float:right;" class="btn btn-danger">annuler</button>
                </div>
            </div>
        </form>
    </div>

    <footer class="bg-warning text-light">
        <h5 style="text-align: center;">Copyright@Bele.Company</h5>
    </footer>
    <script src="{{ asset('style/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('style/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('style/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('style/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>