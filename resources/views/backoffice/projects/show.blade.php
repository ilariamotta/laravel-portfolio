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
                <span class="label">Categoria</span>
                <p class="value">{{ $project->type->name }}</p>
            </div>

            <div class="mb-4">
                <span class="label">Descrizione progetto</span>
                <p class="value">{{ $project->description }}</p>
            </div>

            <div class="d-flex justify-content-center align-items-center gap-2">
{{-- modifica --}}
 <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-project-show">Modifica</a>
 {{-- elimina con modale --}}
 <button type="button" class="btn btn-project-delete btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Elimina
</button>
</div>
</div>
</div>
</div>
<div class="container">
    <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-project-show px-4 py-2">
            ← Torna ai progetti
        </a>
    </div>
</main>
@endsection

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ATTENZIONE</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Vuoi davvero eliminare il progetto <strong>{{ $project->name }}</strong>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-dark rounded-pill px-4" data-bs-dismiss="modal">Annulla</button>
        
        {{-- elimina --}}
        <form action="{{ route("admin.projects.destroy", $project) }}" method="POST">
   @csrf
   @method("DELETE")
   <input type="submit" value="Elimina definitivamente" class="btn-project-delete btn btn-sm">
</form>
      </div>
    </div>
  </div>
</div>

