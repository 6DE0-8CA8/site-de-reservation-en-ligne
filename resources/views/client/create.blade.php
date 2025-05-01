<form action="{{ route('clients.store') }}" method="POST">
    @csrf

    <label for="nom">Nom :</label>
    <input type="text" name="nom" required>

    <label for="email">Email :</label>
    <input type="email" name="email" required>

    <label for="telephone">Téléphone :</label>
    <input type="text" name="telephone" required>

    <label for="adresse">Téléphone :</label>
    <input type="text" name="adresse" required>


    <button type="submit">Ajouter le client</button>
</form>
