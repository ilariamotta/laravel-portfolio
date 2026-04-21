@extends('backoffice.layouts.adminmaster')

@section('dashboard')
<main class="py-4 min-vh-80">
    <div class="d-flex justify-content-center align-items-center">
        <a href="{{ route('admin.types.create') }}" class="btn btn-sm btn-project-create mb-4">
            Aggiungi nuova categoria progetto
        </a>
    </div>

    <div class="d-flex justify-content-center">
        <div class="table-responsive centered-table">
            <table class="table align-middle mb-0 custom-type-table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th class="text-end">Azioni</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($types as $type)
                        <tr>
                            <td class="me-5 pe-5">{{ $type->name }}</td>
                            <td class="text-end">
                                <a href="{{ route('admin.types.edit', $type) }}" class="btn btn-sm btn-project-show">
                                    Modifica
                                </a>

                                <button
                                    type="button"
                                    class="btn btn-project-delete btn-sm"
                                    data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{ $type->id }}">
                                    Elimina
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-project-show px-4 py-2">
            ← Torna ai progetti
        </a>
    </div>
</main>

@foreach ($types as $type)
    <div class="modal fade" id="exampleModal{{ $type->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $type->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel{{ $type->id }}">ATTENZIONE</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Vuoi davvero eliminare la categoria <strong>{{ $type->name }}</strong>?
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark rounded-pill px-4" data-bs-dismiss="modal">
                        Annulla
                    </button>

                    <form action="{{ route('admin.types.destroy', $type) }}" method="POST">
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