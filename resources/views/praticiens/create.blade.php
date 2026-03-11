@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>Nouveau Praticien</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('praticiens.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="PRA_NOM" class="form-label">Nom</label>
                        <input type="text" class="form-control" id="PRA_NOM" name="PRA_NOM" value="{{ old('PRA_NOM') }}" required>
                        @error('PRA_NOM')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="PRA_PRENOM" class="form-label">Prénom</label>
                        <input type="text" class="form-control" id="PRA_PRENOM" name="PRA_PRENOM" value="{{ old('PRA_PRENOM') }}" required>
                        @error('PRA_PRENOM')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="PRA_ADRESSE" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="PRA_ADRESSE" name="PRA_ADRESSE" value="{{ old('PRA_ADRESSE') }}" required>
                        @error('PRA_ADRESSE')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="PRA_CP" class="form-label">Code Postal</label>
                        <input type="text" class="form-control" id="PRA_CP" name="PRA_CP" value="{{ old('PRA_CP') }}" required>
                        @error('PRA_CP')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="PRA_VILLE" class="form-label">Ville</label>
                        <input type="text" class="form-control" id="PRA_VILLE" name="PRA_VILLE" value="{{ old('PRA_VILLE') }}" required>
                        @error('PRA_VILLE')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="PRA_COEFNOTORIETE" class="form-label">Coefficient Notoriété</label>
                        <input type="number" step="0.01" class="form-control" id="PRA_COEFNOTORIETE" name="PRA_COEFNOTORIETE" value="{{ old('PRA_COEFNOTORIETE') }}" required>
                        @error('PRA_COEFNOTORIETE')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="TYP_CODE" class="form-label">Type Code</label>
                        <input type="text" class="form-control" id="TYP_CODE" name="TYP_CODE" value="{{ old('TYP_CODE') }}" required>
                        @error('TYP_CODE')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Créer</button>
                    <a href="{{ route('praticiens.index') }}" class="btn btn-secondary">Annuler</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection