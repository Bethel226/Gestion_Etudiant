<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

</head>
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('style/bootstrap/css/bootstrap.css') }}">

<body>

    <h2 style="text-align: center;">Listes des etudiants</h2>

    <a href="formulaire">
        <button class="btn btn-success" style="margin-left: 1000;">formulaire</button>
    </a>
    <br><br>

    <div class="container">
        <caption>Liste des etudiants</caption>
        <table class="table">

            <thead>
              <tr>
                <th scope="col">numero</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">age</th>
                <th scope="col">genre</th>
                <th scope="col">adresse</th>
                <th scope="col">telephone</th>
                <th scope="col">email</th>
              </tr>
            </thead>
            <tbody>
              @foreach($etudiants as $etudiant)
              <tr>
                <th scope="row">{{$etudiant->id}}</th>
                <td>{{$etudiant->nom}}</td>
                <td>{{$etudiant->prenom}}</td>
                <td>{{$etudiant->age}}</td>
                <td>{{$etudiant->genre}}</td>
                <td>{{$etudiant->adresse}}</td>
                <td>{{$etudiant->telephone}}</td>
                <td>{{$etudiant->mail}}</td>
              </tr>
              @endforeach
             
            </tbody>
          </table>
    </div>
</body>
</html>
