<h1>Liste des clients</h1>

<a href="{{ route('clients.create') }}">Ajouter un client</a>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th><address></address></th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clients as $client)
            <tr>
                <td>{{ $client->id }}</td>
                <td>{{ $client->nom }}</td>
                <td>{{ $client->email }}</td>
                <td>{{ $client->telephone }}</td>
                <td>{{ $client->adresse }}</td>
                <td>
                    <a href="{{ route('clients.edit', $client->id) }}">Modifier</a>
                    <form action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
