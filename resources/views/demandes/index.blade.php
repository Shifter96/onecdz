@extends('layout.layout')
@section('content')
<div>
    <div class="container full-height">
        <h3>Liste des demandes</h3>
        <hr>
    <ul class="collection">
    @foreach($demandes as $demande)
    <li class="collection-item avatar">
        <div>
        <span class="title matricule name">{{$demande->matricule}}</span>
        <span class="title name">{{$demande->nom}}  {{$demande->prenom}}</span>
      <p class="info">{{$demande->email}}<br>
         {{$demande->created_at}}
      </p>
        </div>

     
<div>
    <a href="{{url('/demandes/'.$demande->id)}}">Plus de détails</a>
</div>

     
      
    </li>
    @endforeach
</ul>
</div>
</div>
@endsection