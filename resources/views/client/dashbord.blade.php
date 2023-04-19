@extends("layouts.app")
@section("content")
<h1>Dashboard</h1>
<p>Bienvenue sur votre compte...</p>
@guest
    <div class="alert alert-info">
        Vous êtes visiteur !
    </div>
@endguest
@auth
@if (auth()->user()->role->nom=="admin")
<div class="alert alert-success">
    Vous êtes admin !
</div>
@else
<div class="alert alert-warning">
    Vous êtes client !
</div>
@endif

@endauth
@endsection
