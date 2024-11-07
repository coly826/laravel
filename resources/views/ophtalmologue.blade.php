<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        <h2 class="text-primary">Prendre un rendez-vous pour Ophtalmologue</h2>

        <!-- Error Table -->
        <div id="errorTableContainer" style="display: none;">
            <table class="table table-bordered" id="errorTable">
                <thead>
                    <tr>
                        <th class="text-danger">Erreur</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>

        <form id="appointmentForm" action="{{ route('ophtalmologue') }}" method="POST" onsubmit="return validateForm()">
            @csrf
            <div class="form-group">
                <label for="name" class="text-primary">Nom du patient :</label>
                <input type="text" class="form-control border border-primary" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="doctor_name" class="text-primary">Nom du médecin :</label>
                <input type="text" class="form-control border border-primary" id="doctor_name" name="doctor_name" required>
            </div>
            <div class="form-group">
                <label for="appointment_date" class="text-primary">Date du rendez-vous :</label>
                <input type="date" class="form-control border border-primary" id="appointment_date" name="appointment_date" required>
            </div>
            <button type="submit" class="btn btn-primary">Soumettre</button> &ensp;&ensp;&ensp;&ensp;<a class="btn btn-primary" href="dashboard"><b>Retour vers le tableau de bord</b></a>

        </form>
    </div>

    <script>
        function confirmation(){
            var name = document.getElementById("name").value;
            var doctor_name = document.getElementById("doctor_name").value;
            var appointment_date = document.getElementById("appointment_date").value;

            var confirmRdv = confirm("Confirmez-vous votre prise de rendez-vous pour");
                if (confirmRdv){
                    alert("Votre rendez-vous a été confirmé pour une Ophtalmologue. Nous vous attendons le " + appointment_date + ".");
                }
                else{
                    alert("Votre rendez-vous est annulée.")
                }
        }
        document.querySelector("form").addEventListener("submit", confirmation);
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
