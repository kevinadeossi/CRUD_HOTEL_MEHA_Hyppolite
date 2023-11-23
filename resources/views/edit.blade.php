@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Modifier chambre</div>
  <div class="card-body">
      
      <form action="{{ url('chambre/' .$chambres->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$chambres->id}}" id="id" />
         <label>Nom de l'hotel*</label></br>
        <input type="text" name="name" id="name" class="form-control" value="{{$chambres->name}}" id="name"></br>
        <label>Description de l'hotel</label></br>
        <input type="text" name="description" id="description" class="form-control" value="{{$chambres->description}}" id="description"></br>
        <label>Nom de la chambre*</label></br>
        <input type="text" name="nameC" id="nameC" class="form-control" value="{{$chambres->nameC}}" id="nameC"></br>
        <label>Prix*</label></br>
        <input type="text" name="price" id="price" class="form-control" value="{{$chambres->price}}" id="price"></br>
        <label>Nombre de lits*</label></br>
        <input type="text" name="nBed" id="nBed" class="form-control" value="{{$chambres->nBed}}" id="nBed"></br>
        <label>Max d'adulte</label></br>
        <input type="text" name="maxAdult" id="maxAdult" class="form-control" value="{{$chambres->maxAdult}}" id="maxAdult"></br>
        <label>Enfant maximum autorisé</label></br>
        <input type="text" name="maxChild" id="maxChild" class="form-control" v></br>
        <label>Attributs</label></br>
        <select name="attribut" id="attribut" class="form-control" value="{{$chambres->attribut}}" id="attribut">
            <option value="">Selectionner</option>
            <option value="reveil">Service de reveil</option>
            <option value="television">Television</option>
            <option value="nettoyage">Service de nettoyage</option>
        </select> <br>
        <label>Statut*</label></br>
        <select name="statut" id="statut" class="form-control" value="{{$chambres->statut}}" id="statut">
            <option value="">Selectionner</option>
            <option value="disponible">Disponible</option>
            <option value="non_disponible">Non disponible</option>
        </select> <br>
        <input type="submit" value="Mettre a jour" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
@stop