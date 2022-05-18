<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Accueil</title>

    <!-- Fonts -->
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
    <div class="col md-12 d-flex ">
        <div class="col md-6">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/etud.webp') }}" class="d-block w-100" height="530px" alt="">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/etud1.jpeg') }}" class="d-block w-100" height="530px" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/etud2.webp') }}" class="d-block w-100" height="530px" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col md-6"> <br> <br>
            <h1 style="font-family: Lucida Calligraphy; text-align: center; color: green; font-size: 4em;">Bienvenue dans la gestion des étudiants!</h1>
            <h3 style="font-family: Times New Roman; text-align: center;">Succès, fraternité, triomphe!</h3>
        </div>
    </div>
    </div>
    </div>
    </div>
    @yield('content')

    <footer class="bg-warning text-light">
        <h5 style="text-align: center;">Copyright@Bele.Company</h5>
    </footer>
    <script src="{{ asset('style/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('style/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('style/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('style/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>