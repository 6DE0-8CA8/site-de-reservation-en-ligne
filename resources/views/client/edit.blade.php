@extends('layouts.app')

@section('content')
<h1>Modifier le client</h1>

<form action="{{ route('clients.update', $client->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nom :</label>
    <input type="text" name="nom" value="{{ $client->nom }}" required>

    <label>Email :</label>
    <input type="email" name="email" value="{{ $client->email }}" required>

    <label>Téléphone :</label>
    <input type="text" name="telephone" value="{{ $client->telephone }}" required>

    <label>adresse :</label>
    <input type="text" name="adresse" value="{{ $client->telephone }}" required>

    <button type="submit">Mettre à jour</button>
</form>

<a href="{{ route('clients.index') }}">Retour à la liste</a>
@endsection
