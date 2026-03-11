@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>Détails du Médicament</h2>
                <a href="{{ route('medicaments.index') }}" class="btn btn-secondary">Retour</a>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Dépôt Légal:</strong> {{ $medicament->MED_DEPOTLEGAL }}</p>
                        <p><strong>Nom Commercial:</strong> {{ $medicament->MED_NOMCOMMERCIAL }}</p>
                        <p><strong>Famille:</strong> {{ $medicament->FAM_CODE }}</p>
                        <p><strong>Prix Échantillon:</strong> {{ $medicament->MED_PRIXECHANTILLON ? number_format($medicament->MED_PRIXECHANTILLON, 2) . ' €' : 'N/A' }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Composition:</strong> {{ $medicament->MED_COMPOSITION ?: 'N/A' }}</p>
                        <p><strong>Effets:</strong> {{ $medicament->MED_EFFETS ?: 'N/A' }}</p>
                        <p><strong>Contre-indications:</strong> {{ $medicament->MED_CONTREINDIC ?: 'N/A' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection