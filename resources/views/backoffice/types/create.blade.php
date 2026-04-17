@extends('backoffice.layouts.adminmaster')

@section('dashboard')
    <main class="py-5">
        <div class="container d-flex justify-content-center">
            <div class="project-show-card p-4 p-md-5 rounded-4 shadow-sm">

                <h1 class="text-black-warm fw-bold mb-4 text-center">
                    Aggiungi nuova categoria
                </h1>

<form action="{{ route("admin.types.store") }}" method="POST">
    @csrf
    <div class="mb-4">
    <label for="name" class="py-2">Nuovo nome categoria</label>
    <input type="text" name="name" id="name" class="form-control">
    </div>
    <div class="d-flex justify-content-center gap-3 mt-4">
    <a href="{{ route('admin.types.index') }}" class="btn btn-outline-dark rounded-pill px-4">Annulla</a>
    <input type="submit" value="Salva" class="btn btn-project-store px-4 py-2">
</form>

</div>
</div>
</main>
@endsection