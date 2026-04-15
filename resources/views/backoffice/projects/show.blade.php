@extends('backoffice.layouts.adminmaster')

@section('dashboard')
<main class="py-5">
    <div class="container d-flex justify-content-center">

        <div class="project-show-card p-4 p-md-5 rounded-4 shadow-sm">

            <h1 class="text-black-warm fw-bold mb-4 text-center">
                {{ $project->name }}
            </h1>

            <div class="mb-3">
                <span class="label">Cliente</span>
                <p class="value">{{ $project->customer }}</p>
            </div>

            <div class="mb-3">
                <span class="label">Periodo</span>
                <p class="value">{{ $project->time }}</p>
            </div>

            <div class="mb-4">
                <span class="label">Descrizione progetto</span>
                <p class="value">{{ $project->description }}</p>
            </div>

 <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-project-show">Modifica</a>
        </div>

    </div>
    <div class="text-center py-4">
                <a href="{{ route('admin.index') }}" class="btn btn-project-show px-4 py-2">
                    ← Torna ai progetti
                </a>
            </div>
</main>
@endsection