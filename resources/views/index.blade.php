@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
 
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Liste</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/chambre/create') }}" class="btn btn-success btn-sm" title="Ajouter un chambre">
                            <i class="fa fa-plus" aria-hidden="true"></i> Nouveau
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nom de l'hotel</th>
                                        <th>Nom de la chambre</th>
                                        <th>Prix</th>
                                        <th>Nombre de lits</th>
                                        <th>Statut</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($chambres as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->nameC }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>{{ $item->nBed }}</td>
                                        <td>{{ $item->statut }}</td>
 
                                        <td>
                                            <a href="{{ url('/chambre/' . $item->id) }}" title="Voir Chambre"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Voir</button></a>
                                            <a href="{{ url('/chambre/' . $item->id . '/edit') }}" title="Modifier Chambre"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Modifier</button></a>
 
                                            <form method="POST" action="{{ url('/chambre' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Supprimer Chambre" onclick="return confirm('&quot;Voulez-vous vraiment supprimer cette chambre?&quot;')"><i class="fa fa-trash-o" aria-hidden="true"></i> Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection