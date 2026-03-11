@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>Détails du Praticien</h2>
                <a href="{{ route('praticiens.index') }}" class="btn btn-secondary">Retour</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Nom:</strong> {{ $praticien->PRA_NOM }}</p>
                        <p><strong>Prénom:</strong> {{ $praticien->PRA_PRENOM }}</p>
                        <p><strong>Adresse:</strong> {{ $praticien->PRA_ADRESSE }}</p>
                        <p><strong>Code Postal:</strong> {{ $praticien->PRA_CP }}</p>
                        <p><strong>Ville:</strong> {{ $praticien->PRA_VILLE }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Coefficient Notoriété:</strong> {{ $praticien->PRA_COEFNOTORIETE }}</p>
                        <p><strong>Type Code:</strong> {{ $praticien->TYP_CODE }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection