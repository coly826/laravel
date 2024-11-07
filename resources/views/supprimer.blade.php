<!-- supprimer.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Supprimer Rendez-vous</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h2 class="text-danger">Supprimer le rendez-vous Ophtalmologue</h2>
    <p>Êtes-vous sûr de vouloir supprimer ce rendez-vous pour <strong>{{ $ophtalmologue->name }}</strong> avec le médecin <strong>{{ $ophtalmologue->doctor_name }}</strong> le <strong>{{ $ophtalmologue->appointment_date }}</strong>?</p>

    <form action="{{ route('ophtalmologue.destroy', $ophtalmologue->id) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="btn btn-danger">Supprimer</button> &ensp;&ensp;&ensp;&ensp;
      
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
