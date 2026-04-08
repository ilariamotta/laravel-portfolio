@extends('backoffice.layouts.adminmaster')

@section('profilo')
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-black-warm bg-lilac py-2 px-4 rounded-pill text-white">Il mio Profilo</h2>
                <div class="card mb-4">
                    <div class="card-body rounded-5">
                        <h5 class="card-title text-black-warm">Nome: </h5>
                        <p class="card-text text-black-warm">{{ $user->name }}</p>
                        <h5 class="card-text text-black-warm">Email: </h5>
                        <p class="card-text text-black-warm">{{ $user->email }}</p>
                        <h5 class="card-text text-black-warm">Data di registrazione: </h5>
                        <p>{{ $user->created_at->format('d/m/Y') }}</p>
                    </div>
                </div>
                <a href="{{ route('admin.index') }}">Torna alla home amministrativa</a>
            </div>
        </div>
    </div>
@endsection