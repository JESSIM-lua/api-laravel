
<div class="container">
    <h1 class="mb-4">Éditer un Citoyen</h1>

    <form action="{{ route('citizens.update', $citizen->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="first_name" class="form-label">Prénom</label>
            <input type="text" name="first_name" value="{{ $citizen->first_name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="last_name" class="form-label">Nom</label>
            <input type="text" name="last_name" value="{{ $citizen->last_name }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="date_of_birth" class="form-label">Date de Naissance</label>
            <input type="date" name="date_of_birth" value="{{ $citizen->date_of_birth }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Adresse</label>
            <input type="text" name="address" value="{{ $citizen->address }}" class="form-control">
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label">Téléphone</label>
            <input type="text" name="phone_number" value="{{ $citizen->phone_number }}" class="form-control">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" name="has_driver_license" class="form-check-input" {{ $citizen->has_driver_license ? 'checked' : '' }}>
            <label class="form-check-label">Permis de Conduire</label>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" name="has_weapon_license" class="form-check-input" {{ $citizen->has_weapon_license ? 'checked' : '' }}>
            <label class="form-check-label">Permis d'Arme</label>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à Jour</button>
        <a href="{{ route('citizens.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>

