@extends('layout.layout')
@section('content')
<div class="container">
  <h3>Liste des inscriptions</h3>
  <hr>
<ul id="tabs-swipe-demo" class="tabs tabs1">
    <li class="tab col s3"><a href="#test-swipe-1">BAC</a></li>
    <li class="tab col s3"><a class="active" href="#test-swipe-2">BEM</a></li>
  </ul>
  <div id="test-swipe-1" class="col s12">
  <div class="container full-height">
    <ul class="collection">
    @foreach($bacheliers as $bachelier)
    <li class="collection-item avatar">
        <div>
        <span class="title name">{{$bachelier->nom}}  {{$bachelier->prenom}}</span>
      <p class="info">{{$bachelier->date_de_naissance}}<br>
         {{$bachelier->created_at}}
      </p>
        </div>

     
<div>
    <a href="{{url('/inscriptions/bachelier/'.$bachelier->id)}}">Plus de détails</a>
</div>  
    </li>
    @endforeach
</ul>
</div>
  </div>
  <div id="test-swipe-2" class="col s12">
  <div class="container full-height">
    <ul class="collection">
    @foreach($candidats as $candidat)
    <li class="collection-item avatar">
        <div>
        <span class="title name">{{$candidat->nom}}  {{$candidat->prenom}}</span>
      <p class="info">{{$candidat->date_de_naissance}}<br>
         {{$candidat->created_at}}
      </p>
        </div>

     
<div>
    <a href="{{url('/inscriptions/candidat/'.$candidat->id)}}">Plus de détails</a>
</div>  
    </li>
    @endforeach
</ul>
</div>
  </div>
@endsection