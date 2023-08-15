@extends('baseShow')
{{-- @extends('base.show') --}}

@section('title','Voir')




@section('content')
<div class="col-md-4 mb-4">
    <a href="{{ route('cars.edit',['car'=>$carx->id])}}" class="btn btn-primary">Modifier</a>
   </div>
<div class="card">

    <div class="card-body">

        <p class="card-text"><strong>Marque:</strong> {{ $carx->marque }}</p>
        <p class="card-text"><strong>Modèle:</strong> {{ $carx->modele }}</p>
        <p class="card-text"><strong>Couleur:</strong> {{$carx->couleur  }}</p>
    </div>

</div>
@endsection
