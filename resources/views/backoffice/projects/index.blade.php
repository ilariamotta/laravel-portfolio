@extends('backoffice.layouts.adminmaster')

@section('dashboard')
<main class="py-4 min-vh-80">
    <div class="container">
        <h2 class="text-black-warm mb-3">Benvenuto, {{ $user->name }}!</h2>

        <div class="text-black-warm mb-4">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo maxime quo repellat esse molestias? Pariatur hic accusamus, reprehenderit ullam minima voluptates magni nobis consectetur, iure est, cum aliquid minus voluptatem.
        </div>

        <h3 class="py-3">Visualizza il tuo profilo</h3>
        <a href="{{ route('admin.profile') }}" class="bg-lilac text-butter py-2 px-4 rounded-pill text-decoration-none d-inline-block mb-4">
            Vai al tuo profilo
        </a>

        <h3 class="py-3 text-black-warm">Lista progetti</h3>

        <div class="project-show-card p-3 p-md-4 rounded-4 shadow-sm">
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