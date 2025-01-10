<div class="container">
    <h1 class="mb-4">Créer un Nouveau Citoyen</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('citizens.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="first_name" class="form-label">Prénom</label>
            <input type="text" name="first_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Nom</label>
            <input type="text" name="last_name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="date_of_birth" class="form-label">Date de Naissance</label>
            <input type="date" name="date_of_birth" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Adresse</label>
            <input type="text" name="address" class="form-control">
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">Téléphone</label>
            <input type="text" name="phone_number" class="form-control">
        </div>
        
        <!-- Correction pour les checkbox -->
        <div class="mb-3 form-check">
            <input type="hidden" name="has_driver_license" value="0">
            <input type="checkbox" name="has_driver_license" value="1" class="form-check-input" checked>
            <label class="form-check-label">Permis de Conduire</label>
        </div>
        <div class="mb-3 form-check">
            <input type="hidden" name="has_weapon_license" value="0">
            <input type="checkbox" name="has_weapon_license" value="1" class="form-check-input">
            <label class="form-check-label">Permis d'Arme</label>
        </div>

        <button type="submit" class="btn btn-primary">Créer</button>
        <a href="{{ route('citizens.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>