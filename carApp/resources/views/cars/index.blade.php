@extends('base')

@section('title','Liste des voitures ')


@section('content')
<h1>Liste des Voitures</h1>
<div class="row">
    {{ $cars->links() }}
   <div class="col-md-4 mb-4">
    <a href="{{ route('cars.create')}}" class="btn btn-primary">Nouvelle voiture</a>
   </div>
    @foreach ($cars as $car)
      <article>

        <div class="col-md-4 mb-4">
            <div class="card">
                {{-- <img src="toyota.jpg" class="card-img-top" alt="Toyota"> --}}
                <div class="card-body">
                    <p class="card-title"><strong>Marque:</strong> {{ $car->marque }}</p>
                    <p class="card-text"><strong>Modèle:</strong> {{ $car->modele }}</p>
                    <p class="card-text"><strong>Couleur:</strong> {{ $car->couleur }}</p>
                    <a href="{{ route('cars.show',['slug'=>$car->slug,'car'=>$car->id]) }}" class="btn btn-primary">Aperçu</a>
                </div>
            </div>
        </div>

      </article>
    @endforeach


    <!-- Ajouter d'autres voitures ici -->
</div>
@endsection


