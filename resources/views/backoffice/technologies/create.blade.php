@extends('backoffice.layouts.adminmaster')

@section('dashboard')
    <main class="py-5">
        <div class="container d-flex justify-content-center">
            <div class="project-show-card p-4 p-md-5 rounded-4 shadow-sm">

                <h1 class="text-black-warm fw-bold mb-4 text-center">
                    Aggiungi nuova tecnologia
                </h1>

<form action="{{ route("admin.technologies.store") }}" method="POST">
    @csrf
    <div class="mb-4">
    <label for="name" class="py-2">Nuovo nome tecnologia</label>
    <input type="text" name="name" id="name" class="form-control">
    </div>

    <div class="mb-4">
    <label for="color" class="label">Colore tecnologia</label>
    <div class="d-flex align-items-center gap-3">
        <input
            type="color"
            name="color"
            id="color"
            class="form-control form-control-color technology-color-picker"
            value="#C9C7FF"
            title="Scegli un colore"
        >
        <span class="value mb-0">Seleziona il colore del badge</span>
    </div>
</div>

    <div class="d-flex justify-content-center gap-3 mt-4">
    <a href="{{ route('admin.technologies.index') }}" class="btn btn-outline-dark rounded-pill px-4">Annulla</a>
    <input type="submit" value="Salva" class="btn btn-project-store px-4 py-2">
</form>

</div>
</div>
</main>
@endsection