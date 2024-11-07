<h1>Ajouter un Patient</h1>

<form action="{{ route('patient') }}" method="POST">
    @csrf
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" required>

    <label for="date_naissance">Date de Naissance :</label>
    <input type="date" name="date_naissance" id="date_naissance" required>

    <label for="adresse">Adresse :</label>
    <input type="text" name="adresse" id="adresse" required>

    <label for="telephone">Téléphone :</label>
    <input type="text" name="telephone" id="telephone" required>

    <button type="submit">Ajouter</button>
</form>
