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
          <input class="form-control me-2" id="myInput" onkeyup="myFunction()" type="search" placeholder="Recherche" aria-label="Search">
          <button class="btn btn-outline-light" type="submit">Recherche</button>
        </form>
      </div>
    </div>
  </nav>


  <h2 style="text-align: center;">Listes des etudiants</h2>

  <a href="formulaire">
    <button class="btn btn-warning" style="margin-left: 1000;">Formulaire</button>
  </a>
  <br><br>

  <div class="container">
    <caption>Liste des etudiants</caption>

    <table class="table" id="myTable">
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
  <footer class="bg-warning text-light">
    <h5 style="text-align: center;">Copyright@Bele.Company</h5>
  </footer>

  <script src="{{ asset('style/bootstrap/js/bootstrap.js') }}"></script>
  <script src="{{ asset('style/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('style/bootstrap/js/bootstrap.bundle.js') }}"></script>
  <script src="{{ asset('style/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script>
    function myFunction() {
      // Declare variables
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");

      // Loop through all table rows, and hide those who don't match the search query
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }
      }
    }
  </script>
</body>

</html>