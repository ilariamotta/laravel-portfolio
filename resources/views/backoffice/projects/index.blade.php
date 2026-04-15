@extends('backoffice.layouts.adminmaster')

@section('dashboard')
<main class="py-4 min-vh-80">
    <div class="container">
        <h2 class="text-black-warm mb-3">Benvenuto, {{ $user->name }}!</h2>

        <div class="text-black-warm mb-4">
            Da questa sezione puoi gestire i progetti del tuo portfolio: visualizzare i dettagli, modificare le informazioni o eliminarli. Clicca su "Vedi" per accedere alla pagina di gestione di ciascun progetto oppure clicca sul pulsante "Crea nuovo progetto".
        </div>


        <div class="p-3 p-md-4 rounded-4 shadow-sm">
            <div class="table-responsive centered-table">
                <table class="table align-middle mb-0 custom-project-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Cliente</th>
                            <th>Periodo</th>
                            <th class="text-end">Azioni</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($projects as $project)
                            <tr>
                                <td>{{ $project->id }}</td>
                                <td class="fw-bold text-pink">{{ $project->name }}</td>
                                <td>{{ $project->customer }}</td>
                                <td>{{ $project->time }}</td>
                                <td class="text-end">
                                    <a href="{{ route('admin.projects.show', $project) }}"
                                       class="btn btn-sm btn-project-show">
                                        Vedi
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection