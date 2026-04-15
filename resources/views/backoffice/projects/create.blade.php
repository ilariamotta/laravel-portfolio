@extends('backoffice.layouts.adminmaster')

@section('dashboard')

<form action="{{ route("admin.projects.store") }}" method="POST">
@csrf
<label for="name">Titolo progetto</label>
<input type="text" name="name" id="name">
<label for="customer">Nome cliente</label>
<input type="text" name="customer" id="customer">
	<div class="form-group">
    <label class="active" for="time">Periodo progetto</label>
    <input class="form-control" type="date" id="time" name="time">
</div>
<label for="description">Descrizione del progetto</label>
<input type="textarea" name="description" id="description"></input>
<input type="submit" value="Salva il progetto">
</form>


</form>
@endsection