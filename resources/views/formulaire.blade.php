<!DOCTYPE html>

<head>
    <title>formulaire</title>
</head>
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.css') }}">

<body>
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
                <input type="submit" class="btn btn-primary" value="valider">
            </div>
            <div class="col-lg-6">
                <button type="submit" style="float:right;" class="btn btn-primary">annuler</button>
            </div>
        </div>



      </form>
    </div>


</body>

</html>
