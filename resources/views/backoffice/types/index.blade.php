@extends('backoffice.layouts.adminmaster')

@section('dashboard')
<main class="py-4 min-vh-80">
    <div class="d-flex justify-content-center align-items-center">
    <a href="{{ route('admin.types.create') }}" class="btn btn-sm btn-project-create my-2">Aggiungi nuova categoria progetto</a>
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
                                    
                                    <a href="{{ route('admin.types.edit', $type) }}" class="btn btn-sm btn-project-show">Modifica</a>
                                    <button type="button" class="btn btn-project-delete btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button>
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