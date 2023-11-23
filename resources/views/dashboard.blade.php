@extends('layout')
@section('content')
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Acceuil') }}
        </h2>
    </x-slot>


    
    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1 style="font-size:larger">Bienvenue.</h1>
            <h3>Vous etes bien connecter</h3>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="card-body">
                        
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Earum adipisci amet voluptatum, sed laudantium sit saepe iste! Aut eum laudantium aliquam minima nostrum illo tempore numquam blanditiis non dolores iusto qui unde, rem ducimus cumque, laborum aspernatur? Provident minima dolor aliquid a quas dicta, iste laudantium molestias eveniet! Doloribus voluptates, eius nemo voluptatum architecto fugit amet aspernatur
                            </p>
                        <a href="{{ url('/chambre/create') }}" class="btn btn-success btn-sm" title="Add">
                            <i class="fa fa-plus" aria-hidden="true"></i> Acceder au formulaire
                        </a>
                        <br/>
                        <br/>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection