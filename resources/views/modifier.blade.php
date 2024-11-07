<!-- modifier.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Modifier Rendez-vous</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-primary">Modifier le rendez-vous Ophtalmologue</h2>

    <form action="{{ route('ophtalmologue.update', $ophtalmologue->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name" class="text-primary">Nom du patient :</label>
            <input type="text" class="form-control border border-primary" id="name" name="name" value="{{ $ophtalmologue->name }}" required>
        </div>

        <div class="form-group">
            <label for="doctor_name" class="text-primary">Nom du médecin :</label>
            <input type="text" class="form-control border border-primary" id="doctor_name" name="doctor_name" value="{{ $ophtalmologue->doctor_name }}" required>
        </div>

        <div class="form-group">
            <label for="appointment_date" class="text-primary">Date du rendez-vous :</label>
            <input type="date" class="form-control border border-primary" id="appointment_date" name="appointment_date" value="{{ $ophtalmologue->appointment_date }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
