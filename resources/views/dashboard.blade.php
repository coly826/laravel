<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
        <a class="navbar-brand text-white fw-bold  Mon_Portfolio" href="#">Prise de rendez</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link text-white a1" href="#"><b>Home</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white a1" href="#"><b>About</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white a2" href="#profil"><b>Consultation Générale</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white a2" href="{{ route('ophtalmologue') }}"><b>Ophtalmologue</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white a2" href="#Compètences"><b>Gynécologue</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white a2" href="#contact"><b>Dentiste</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white a2" href="#contact"><b>Pédiatre</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white a2" href="jours_travail"><b>Jours de travaille</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white a2" href="#contact"><b>Contact-us</b></a>
                </li>
            </ul>
        </div>
    </nav><br><br><br><br>
   <div class="container">
    <div class="row">
        <div class="col">
            <div class="container">
                <h1 class="mt-5 text-primary">Bienvenue sur le tableau de bord</h1>
                <p class="mt-3 text-success">Vous êtes connecté.</p>
                <form action="{{ route('logout') }}" method="POST" class="mt-4">
                    @csrf
                    <button type="submit" class="btn btn-danger">Déconnexion</button>
                </form>
            </div>

        </div>
        <div class="col">
            <img src="images/x1.png" alt="" class="fluid-img w-100">
        </div>
    </div>
   </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
