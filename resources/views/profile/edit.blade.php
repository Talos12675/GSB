@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>Mon Profil</h2>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Matricule:</strong> {{ $visiteur->VIS_MATRICULE }}</p>
                        <p><strong>Nom:</strong> {{ $visiteur->VIS_NOM }}</p>
                        <p><strong>Prénom:</strong> {{ $visiteur->VIS_PRENOM }}</p>
                        <p><strong>Adresse:</strong> {{ $visiteur->VIS_ADRESSE }}</p>
                        <p><strong>Code Postal:</strong> {{ $visiteur->VIS_CP }}</p>
                        <p><strong>Ville:</strong> {{ $visiteur->VIS_VILLE }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Date d'embauche:</strong> {{ \Carbon\Carbon::parse($visiteur->VIS_DATEEMBAUCHE)->format('d/m/Y') }}</p>
                        <p><strong>Secteur:</strong> {{ $visiteur->SEC_CODE }}</p>
                        <p><strong>Laboratoire:</strong> {{ $visiteur->LAB_CODE }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection