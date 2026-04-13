<div class="table-responsive mb-5 rounded-4 shadow-sm overflow-hidden custom-table-wrapper">
    <table class="table table-hover align-middle mb-0 custom-project-table">

        <thead class="bg-black-warm text-white">
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

                    <td class="fw-bold text-pink">
                        {{ $project->name }}
                    </td>

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