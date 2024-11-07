<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/first.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

      <div class="container-fluid all">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
            <a class="navbar-brand text-white fw-bold  Mon_Portfolio" href="#"><b class="b1">Bienvenue sur les pages <span class="text-secondary">=></span></b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <style>
                        .b1{
                            color:white;
                        }
                        .all{
                            background-color: white;
                            border-bottom: 2px solid blue;
                            border-bottom-left-radius: 40%;
                            border-bottom-right-radius: 40%;
                        }
                    </style>
                    <li class="nav-item">
                        <a
                        href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                    >
                        <b class="b1">Log in</b>
                    </a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                <b class="b1">Register</b>
                            </a>
                        @endif
                    </li>


                </ul>
            </div>
        </nav><br><br><br><br><br>
        <div class="container text-center">
            <div class="row text-center">
                <div class="col ">
                    <div class="container">
                        <h1 class="mt-5 text-primary text-center">Bienvenue sur notre plate-forme</h1>
                        <p class="mt-3 s text-center text-primary">Vous pouvez se connecter si vous avez un compte ou s'inscrire </p>
                        <p class="mt-3 s"><a href="login" class="btn btn-primary text-center">connecter</a> <a href="register" class="btn btn-primary text-center">inscrire</a> </p>

                    </div>
                </div>
                <div class="col">
                    <div>
                        <img src="images/x4.png" alt="" class="fluid-img w-100">
                    </div>
                </div>

            </div>
        </div>

      </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
