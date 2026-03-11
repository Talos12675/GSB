@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h2>Nouveau Médicament</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('medicaments.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="MED_DEPOTLEGAL" class="form-label">Dépôt Légal</label>
                        <input type="text" class="form-control" id="MED_DEPOTLEGAL" name="MED_DEPOTLEGAL" value="{{ old('MED_DEPOTLEGAL') }}" required>
                        @error('MED_DEPOTLEGAL')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="MED_NOMCOMMERCIAL" class="form-label">Nom Commercial</label>
                        <input type="text" class="form-control" id="MED_NOMCOMMERCIAL" name="MED_NOMCOMMERCIAL" value="{{ old('MED_NOMCOMMERCIAL') }}" required>
                        @error('MED_NOMCOMMERCIAL')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="FAM_CODE" class="form-label">Famille Code</label>
                        <input type="text" class="form-control" id="FAM_CODE" name="FAM_CODE" value="{{ old('FAM_CODE') }}" required>
                        @error('FAM_CODE')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="MED_COMPOSITION" class="form-label">Composition</label>
                        <textarea class="form-control" id="MED_COMPOSITION" name="MED_COMPOSITION" rows="3">{{ old('MED_COMPOSITION') }}</textarea>
                        @error('MED_COMPOSITION')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="MED_EFFETS" class="form-label">Effets</label>
                        <textarea class="form-control" id="MED_EFFETS" name="MED_EFFETS" rows="3">{{ old('MED_EFFETS') }}</textarea>
                        @error('MED_EFFETS')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="MED_CONTREINDIC" class="form-label">Contre-indications</label>
                        <textarea class="form-control" id="MED_CONTREINDIC" name="MED_CONTREINDIC" rows="3">{{ old('MED_CONTREINDIC') }}</textarea>
                        @error('MED_CONTREINDIC')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="MED_PRIXECHANTILLON" class="form-label">Prix Échantillon</label>
                        <input type="number" step="0.01" class="form-control" id="MED_PRIXECHANTILLON" name="MED_PRIXECHANTILLON" value="{{ old('MED_PRIXECHANTILLON') }}">
                        @error('MED_PRIXECHANTILLON')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Créer</button>
                    <a href="{{ route('medicaments.index') }}" class="btn btn-secondary">Annuler</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection