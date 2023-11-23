@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Details de la chambre</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <p class="card-text">Nom de l'hotel : {{ $chambres->name }}</p>
        <p class="card-text">Description de l'hotel : {{ $chambres->description }}</p>
        <p class="card-text">Nom de la chambre : {{ $chambres->nameC }}</p>
        <p class="card-text">Prix : {{ $chambres->price }}</p>
        <p class="card-text">Nombre de lits : {{ $chambres->nBed }}</p>
        <p class="card-text">Max d'adulte : {{ $chambres->maxAdult }}</p>
        <p class="card-text">Enfant maximum autorisé : {{ $chambres->maxChild }}</p>
        <p class="card-text">Attributs : {{ $chambres->attribut }}</p>
        <p class="card-text">Statut : {{ $chambres->statut }}</p>
  </div>
       
    </hr>
  
  </div>
</div>