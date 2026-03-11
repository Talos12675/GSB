@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white">
                <h2 class="text-center mb-0">Bienvenue sur votre espace personnel</h2>
            </div>
            <div class="card-body">
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm hover-shadow">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Derniers comptes rendus</h5>
                                <p class="card-text">Accédez à vos derniers comptes rendus de visite.</p>
                                <a href="{{ route('rapports.index') }}" class="btn btn-primary">Voir les comptes rendus</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm hover-shadow">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Praticiens</h5>
                                <p class="card-text">Consultez la liste des praticiens.</p>
                                <a href="{{ route('praticiens.index') }}" class="btn btn-primary">Voir les praticiens</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm hover-shadow">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Médicaments</h5>
                                <p class="card-text">Consultez la liste des médicaments.</p>
                                <a href="{{ route('medicaments.index') }}" class="btn btn-primary">Voir les médicaments</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card h-100 shadow-sm hover-shadow">
                            <div class="card-body">
                                <h5 class="card-title text-primary">Mon Profil</h5>
                                <p class="card-text">Gérez vos informations personnelles.</p>
                                <a href="{{ route('profile.edit') }}" class="btn btn-primary">Voir le profil</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                @if($recentRapports->count() > 0)
                <div class="mt-4">
                    <h5>Derniers comptes rendus</h5>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Praticien</th>
                                    <th>Bilan</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($recentRapports as $rapport)
                                <tr>
                                    <td>{{ \Carbon\Carbon::parse($rapport->RAP_DATE)->format('d/m/Y') }}</td>
                                    <td>{{ $rapport->praticien->PRA_NOM ?? 'N/A' }} {{ $rapport->praticien->PRA_PRENOM ?? '' }}</td>
                                    <td>{{ Str::limit($rapport->RAP_BILAN, 50) }}</td>
                                    <td>
                                        <a href="{{ route('rapports.show', $rapport->VIS_MATRICULE . '_' . $rapport->RAP_NUM) }}" class="btn btn-sm btn-outline-primary">Voir</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection