@extends('backoffice.layouts.adminmaster')

@section('dashboard')
    <main class=" py-4 min-vh-80">
        <h2 class="text-black-warm">Benvenuto, {{ $user->name }}!</h2>
    <div class="text-black-warm">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Explicabo maxime quo repellat esse molestias? Pariatur hic accusamus, reprehenderit ullam minima voluptates magni nobis consectetur, iure est, cum aliquid minus voluptatem.</div>

<h3 class="py-3">Visualizza il tuo profilo</h3>
<a href="{{ route('admin.profile') }}" class="bg-lilac text-butter py-2 px-4 rounded-pill text-decoration-none">Vai al tuo profilo</a>
<h3 class="py-3">Lista progetti</h3>
   <x-project-table :projects="$projects" />
</main>
@endsection