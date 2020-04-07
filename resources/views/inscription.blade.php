@extends('layout')

@section('contenu')
    <form>
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" placeholder="Nom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" class="form-control" id="prenom" placeholder="Prénom" required>
        </div>
        <div class="form-group">
            <label for="prenom">Age</label>
            <input type="number" class="form-control" id="age" value="20" min="20" max="80" required>
        </div>
        <button class="btn" type="submit">Envoyer</button>
    </form>
@endsection
