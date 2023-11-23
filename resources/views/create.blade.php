@extends('layout')
@section('content')

<div class="card">
  <div class="card-header">Ajouter une chambre</div>
  <div class="card-body">
      
      <form action="{{ url('chambre') }}" method="post">
        {!! csrf_field() !!}
        <label>Nom de l'hotel*</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Description de l'hotel</label></br>
        <input type="text" name="description" id="description" class="form-control"></br>
        <label>Nom de la chambre*</label></br>
        <input type="text" name="nameC" id="nameC" class="form-control"></br>
        <label>Prix*</label></br>
        <input type="text" name="price" id="price" class="form-control"></br>
        <label>Nombre de lits*</label></br>
        <input type="text" name="nBed" id="nBed" class="form-control"></br>
        <label>Max d'adulte</label></br>
        <input type="text" name="maxAdult" id="maxAdult" class="form-control"></br>
        <label>Enfant maximum autorisé</label></br>
        <input type="text" name="maxChild" id="maxChild" class="form-control"></br>
        <label>Attributs</label></br>
        <select name="attribut" id="attribut" class="form-control">
            <option value="">Selectionner</option>
            <option value="reveil">Service de reveil</option>
            <option value="television">Television</option>
            <option value="nettoyage">Service de nettoyage</option>
        </select> <br>
        <label>Statut*</label></br>
        <select name="statut" id="statut" class="form-control">
            <option value="">Selectionner</option>
            <option value="disponible">Disponible</option>
            <option value="non disponible">Non disponible</option>
        </select> <br>
        <input type="submit" value="Sauvegarder" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 @stop
