@extends('backoffice.layouts.adminmaster')

@section('dashboard')
    <main class="py-5">
        <div class="container d-flex justify-content-center">
            <div class="project-show-card p-4 p-md-5 rounded-4 shadow-sm">

                <h1 class="text-black-warm fw-bold mb-4 text-center">
                    Modifica tecnologia
                </h1>

<form action="{{ route("admin.technologies.update", $technology->id) }}" method="POST">
    @csrf
    @method("PUT")
    <div class="mb-4">
    <label for="name" class="py-2">Modifica nome tecnologia</label>
    <input type="text" name="name" id="name" class="form-control"  placeholder="{{ $technology->name }}">
    </div>

    <div class="mb-4">
    <div class="d-flex align-items-center gap-3">
        <input
            type="color"
            name="color"
            id="color"
            class="form-control form-control-color technology-color-picker"
            value="{{ $technology->color }}"
            title="Scegli un colore"
        >
        <span class="value mb-0">Modifica il colore del badge</span>
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