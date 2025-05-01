@extends('layouts.app')

@section('content')
<h1>Détails du client</h1>

<p><strong>ID :</strong> {{ $client->id }}</p>
<p><strong>Nom :</strong> {{ $client->nom }}</p>
<p><strong>Email :</strong> {{ $client->email }}</p>
<p><strong>Téléphone :</strong> {{ $client->telephone }}</p>
<p><strong>adresse:</strong> {{ $client->adresse }}</p>

<a href="{{ route('clients.edit', $client->id) }}">Modifier</a>
<a href="{{ route('clients.index') }}">Retour à la liste</a>
@endsection
