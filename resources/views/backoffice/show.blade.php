@extends('backoffice.layouts.adminmaster')

@section('dashboard')
<main class="py-4">
    <div class="container d-flex flex-column justify-content-center">
        <h1 class="text-black-warm">{{ $project->name }}</h1>

        <p><strong>Cliente:</strong><br> {{ $project->customer }}</p>
        <p><strong>Periodo:</strong> <br>{{ $project->time }}</p>
        <p><strong>Descrizione progetto:</strong><br> {{ $project->description }}</p>

        <a href="{{ route('admin.index') }}" class="btn btn-project-show mt-3 inline-block">
            Torna ai progetti
        </a>
    </div>
</main>
@endsection