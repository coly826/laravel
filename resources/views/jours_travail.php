<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jours de Travail</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Horaires de Travail Hebdomadaires</h2>

        <!-- Work Schedule Table -->
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Jour</th>
                    <th>Heures du Matin</th>
                    <th>Heures de l'Après-midi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Define an array of working days and hours
                $workSchedule = [
                    ['day' => 'Lundi', 'morning' => '08:00 - 12:00', 'afternoon' => '14:00 - 18:00'],
                    ['day' => 'Mardi', 'morning' => '08:00 - 12:00', 'afternoon' => '14:00 - 18:00'],
                    ['day' => 'Mercredi', 'morning' => '08:00 - 12:00', 'afternoon' => '14:00 - 18:00'],
                    ['day' => 'Jeudi', 'morning' => '08:00 - 12:00', 'afternoon' => '14:00 - 18:00'],
                    ['day' => 'Vendredi', 'morning' => '08:00 - 12:00', 'afternoon' => '14:00 - 18:00'],
                    ['day' => 'Samedi', 'morning' => '09:00 - 13:00', 'afternoon' => 'Fermé'],
                    ['day' => 'Dimanche', 'morning' => 'Fermé', 'afternoon' => 'Fermé'],
                ];

                // Loop through the schedule and generate table rows
                foreach ($workSchedule as $workDay) {
                    echo "<tr>";
                    echo "<td>{$workDay['day']}</td>";
                    echo "<td>{$workDay['morning']}</td>";
                    echo "<td>{$workDay['afternoon']}</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS (Optional for interactive components) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
