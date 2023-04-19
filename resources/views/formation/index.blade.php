@extends('template')
@section("titre")
Formation
@endsection

@section('content')
<div class="container">
<h2>Nous vous souhaitons la bienvenue sur la plateforme de formation Jelab !</h2>
</div>
<main class="container">
    
    <div class="container">
        <h4>Nous avons effectué pour vous une sélection de cours à suivre que vous trouverez ci-dessous ainsi que dans la section Cours suggérés : </h4>
    </div>
    <div class="row">  
        @foreach ($lesFormations as $uneFormation)
        <div class="card-body">
            <h5 class="card-title">{{Str::upper($uneFormation->titre)}}</h5>
            <p class="card-text"></p>
        </div>

    </div>
</main>
@endsection