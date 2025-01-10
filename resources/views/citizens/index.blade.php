<div class="container">
    <h1 class="mb-4">Liste des Citoyens</h1>

    <a href="{{ route('citizens.create') }}" class="btn btn-success mb-3">Créer un Nouveau Citoyen</a>

    @if ($citizens->isEmpty())
        <div class="alert alert-info">Aucun citoyen n'a été trouvé.</div>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Téléphone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($citizens as $citizen)
                    <tr>
                        <td>{{ $citizen->id }}</td>
                        <td>{{ $citizen->first_name }}</td>
                        <td>{{ $citizen->last_name }}</td>
                        <td>{{ $citizen->phone_number ?? 'Non spécifié' }}</td>
                        <td>
                            <a href="{{ route('citizens.show', $citizen->id) }}" class="btn btn-info btn-sm">Voir</a>
                            <a href="{{ route('citizens.edit', $citizen->id) }}" class="btn btn-warning btn-sm">Éditer</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-3">
            {{ $citizens->links() }}
        </div>
    @endif
</div>
