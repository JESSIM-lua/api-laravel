<div class="container">
    <h1 class="mb-4">Détails du Citoyen</h1>

    <div class="card">
        <div class="card-header">
            <h3>{{ $citizen->first_name }} {{ $citizen->last_name }}</h3>
        </div>
        <div class="card-body">
            <p><strong>Date de naissance :</strong> {{ $citizen->date_of_birth }}</p>
            <p><strong>Adresse :</strong> {{ $citizen->address ?? 'Non spécifiée' }}</p>
            <p><strong>Numéro de téléphone :</strong> {{ $citizen->phone_number ?? 'Non spécifié' }}</p>
            <p><strong>Permis de conduire :</strong> {{ $citizen->has_driver_license ? 'Oui' : 'Non' }}</p>
            <p><strong>Permis d'arme :</strong> {{ $citizen->has_weapon_license ? 'Oui' : 'Non' }}</p>
            <p><strong>Date de création :</strong> {{ $citizen->created_at->format('d/m/Y H:i') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('citizens.edit', $citizen->id) }}" class="btn btn-warning">Éditer</a>
            <a href="{{ route('citizens.index') }}" class="btn btn-secondary">Retour</a>
        </div>
    </div>
</div>