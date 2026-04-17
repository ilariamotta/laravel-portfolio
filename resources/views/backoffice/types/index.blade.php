@extends('backoffice.layouts.adminmaster')

@section('dashboard')
<main class="py-4 min-vh-80">
    <div class="p-3 p-md-4 rounded-4 shadow-sm">
            <div class="table-responsive centered-table">
                <table class="table align-middle mb-0 custom-project-table">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th class="text-end">Azioni</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($types as $type)
                            <tr>
                                <td>{{ $type->name }}</td>
                                <td class="text-end">
                                    {{-- <a href="{{ route('admin.types.show', $type) }}" class="btn btn-sm btn-project-show">Vedi</a>
                                    <a href="{{ route('admin.types.edit', $type) }}" class="btn btn-sm btn-project-show">Modifica</a>
                                    <button type="button" class="btn btn-project-delete btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina</button> --}}
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