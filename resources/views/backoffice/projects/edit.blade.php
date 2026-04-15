@extends('backoffice.layouts.adminmaster')

@section('dashboard')
    <main class="py-5">
        <div class="container d-flex justify-content-center">
            <div class="project-show-card p-4 p-md-5 rounded-4 shadow-sm">

                <h1 class="text-black-warm fw-bold mb-4 text-center">
                    Modifica il progetto
                </h1>

                <form action="{{ route('admin.projects.update', $project) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="name" class="label">Titolo progetto</label>
                        <input type="text" name="name" id="name" class="form-control"
                            value="{{ $project->name }}">
                    </div>

                    <div class="mb-4">
                        <label for="customer" class="label">Nome cliente</label>
                        <input type="text" name="customer" id="customer" class="form-control"
                            value="{{ $project->customer}}">
                    </div>

                    <div class="mb-4">
                        <label for="time" class="label">Periodo progetto</label>
                        <input type="date" name="time" id="time" class="form-control" value="{{ $project->time }}">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="label">Descrizione del progetto</label>
                        <textarea name="description" id="description" rows="5" class="form-control"
                            >{{ $project->name }}</textarea>
                    </div>

                    <div class="d-flex justify-content-center gap-3 mt-4">
                        <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-dark rounded-pill px-4">
                            Annulla
                        </a>

                        <input type="submit" value="Aggiorna il progetto" class="btn btn-project-store px-4 py-2">
                    </div>
                </form>

            </div>
            
                </div>
                                <a href="{{ route('admin.index') }}" class="btn btn-project-show px-4 py-2 mx-auto">
                    ← Torna ai progetti
                </a>
    </main>
@endsection
