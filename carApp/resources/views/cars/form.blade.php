<form action="" method="post">
    @csrf

<div class="mb-3">
    <label for="marque" class="form-label">Marque :</label>
    <input type="text" class="form-control" name="marque" id="marque" value="{{ old('marque',$car->marque) }}" >
    @error('marque')
    {{ $message }}
    @enderror
</div>

<div class="mb-3">
    <label for="modele" class="form-label">Modèle :</label>
    <input type="text" class="form-control" name="modele" id="modele" value="{{ old('modele',$car->modele) }}" >
    @error('modele')
    {{ $message }}
    @enderror
</div>

<div class="mb-3">
    <label for="couleur" class="form-label">Couleur :</label>
    <input type="text" class="form-control" name="couleur" id="couleur" value="{{ old('couleur',$car->couleur) }}" >
    @error('couleur')
    {{ $message }}
    @enderror
</div>
@if ($car->id)
    <div class="mb-3">
        <label for="slug" class="form-label">Slug :</label>
        <input type="text" class="form-control" name="slug" id="slug" value="{{ old('slug',$car->slug) }}" >
        @error('slug')
        {{ $message }}
        @enderror
    </div>
@endif


<button type="submit" class="btn btn-primary">
    @if($car->id) Modifier  @else Créer @endif
</button>

</form>
