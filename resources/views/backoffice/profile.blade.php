@extends('backoffice.layouts.adminmaster')

@section('dashboard')
    <main class="py-5">
        <div class="container d-flex justify-content-center">
            <div class="project-show-card p-4 p-md-5 rounded-4 shadow-sm">

                <h1 class="text-black-warm fw-bold mb-4 text-center">
                    Il mio profilo
                </h1>

                <div class="mb-4">
                    <span class="label">Nome</span>
                    <p class="value mb-0">{{ $user->name }}</p>
                </div>

                <div class="mb-4">
                    <span class="label">Email</span>
                    <p class="value mb-0">{{ $user->email }}</p>
                </div>

                <div class="mb-4">
                    <span class="label">Data di registrazione</span>
                    <p class="value mb-0">{{ $user->created_at->format('d/m/Y') }}</p>
                </div>

                <div class="text-center mt-4">
                    <a href="{{ route('admin.index') }}" class="btn btn-project-show px-4 py-2">
                        ← Torna alla home amministrativa
                    </a>
                </div>

            </div>
        </div>
    </main>
@endsection