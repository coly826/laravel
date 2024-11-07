<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
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
                    <a class="nav-link text-white a1" href="{{ route('register') }}"><b>Inscription</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white a2" href="{{ route('login') }}"><b>Connexion</b></a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" class="">
                        @csrf
                        <button type="submit" class="btn btn-primary"><b>Déconnexion</b></button>
                    </form>
                </li>
            </ul>
        </div>
    </nav><br><br><br><br>
    <div class="container">
        <h1 class="mt-5 text-primary">Connexion</h1>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger mt-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}" class="mt-4">
            @csrf
            <div class="form-group">
                <label for="email" class="text-primary">Email :</label>
                <input type="email" class="form-control border border-primary w-50" name="email" required>
            </div>
            <div class="form-group">
                <label for="password" class="text-primary">Mot de passe :</label>
                <input type="password" class="form-control border border-primary w-50" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Se connecter</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
