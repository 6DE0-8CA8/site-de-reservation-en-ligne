@extends('layouts.app')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="mx-0 row page-titles">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <span class="ml-1">Liste des agences</span>
                </div>
            </div>
            <div class="mt-2 col-sm-6 p-md-0 justify-content-sm-end mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Agences</a></li>
                    <li class="breadcrumb-item active"><a href="#">Liste</a></li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Agences disponibles</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Ville</th>
                                        <th>Téléphone</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($agences as $agence)
                                    <tr>
                                        <td>{{ $agence->nom }}</td>
                                        <td>{{ $agence->ville }}</td>
                                        <td>{{ $agence->telephone }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
