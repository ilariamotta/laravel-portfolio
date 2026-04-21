@extends('backoffice.layouts.adminmaster')

@section('dashboard')
<main class="py-4 min-vh-80">
    <div class="container-xl">
        <h2 class="text-black-warm mb-3">Benvenuto, {{ auth()->user()->name }}!</h2>

        <div class="text-black-warm mb-4">
            Da questa sezione puoi gestire i progetti del tuo portfolio: visualizzare i dettagli, modificare le informazioni o eliminarli. 
            Clicca su "Vedi" per accedere alla pagina di gestione di ciascun progetto oppure clicca sul pulsante "Aggiungi nuovo progetto".
            <br>
            Altrimenti gestisci le categorie dei progetti
            <a href="{{ route('admin.types.index') }}" class="text-pink">qui</a>.<br>
            Puoi anche modificare o aggiungere le tecnologie che utilizzi nei progetti da qui.
                </div>

        <a href="{{ route('admin.projects.create') }}" class="btn btn-sm btn-project-create my-2">
            Aggiungi nuovo progetto
        </a>

        <div class="p-3 p-md-4 rounded-4 shadow-sm">
            <div class="table-responsive centered-table">
                <table class="table align-middle mb-0 custom-project-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Cliente</th>
                            <th>Periodo</th>
                            <th>Categoria</th>
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
                                <td>{{ $project->type?->name }}</td>
                                <td class="text-end">
                                       <div class="d-flex justify-content-end gap-2 flex-wrap">
                                    <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-sm btn-project-show">Vedi</a>
                                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-project-show">Modifica</a>

                                    <button
                                        type="button"
                                        class="btn btn-project-delete btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deleteProjectModal{{ $project->id }}"
                                    >
                                        Elimina
                                    </button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@foreach ($projects as $project)
    <div class="modal fade" id="deleteProjectModal{{ $project->id }}" tabindex="-1" aria-labelledby="deleteProjectModalLabel{{ $project->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteProjectModalLabel{{ $project->id }}">ATTENZIONE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Vuoi davvero eliminare il progetto <strong>{{ $project->name }}</strong>?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark rounded-pill px-4" data-bs-dismiss="modal">
                        Annulla
                    </button>

                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Elimina definitivamente" class="btn-project-delete btn btn-sm">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endsection