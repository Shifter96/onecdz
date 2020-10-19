@extends('layout.layout')
@section('content')

<div class="container">
        <div class="card-panel white">
                <h2 class="title">Réçu</h2>
                <hr>
                <div class="row">
                    <label for="" class="label col s3">matricule:</label>
                    <p class="content col s9">{{$eleve->matricule}}</p>    
                </div>
                <div class="row">
                    <label for="" class="label col s3">Fillière:</label>
                    <p class="content col s9">Scientifique</p>    
                </div>
                <div class="row">
                    <label for="" class="label col s3">Nom:</label>
                    <p class="content col s9">{{$eleve->nom}}</p>    
                </div>
                <div class="row">
                    <label for="" class="label col s3">Prénom:</label>
                    <p class="content col s9">{{$eleve->prenom}}</p>
                </div>
                <div class="row">
                    <label for="" class="label col s3">Date de naissance:</label>
                    <p class="content col s9">{{$eleve->date_de_naissance}}</p>
                </div>
                <div class="row">
                    <label for="" class="label col s3">Lieux de naissance: </label>
                    <p class="content col s9">{{$eleve->lieux}}</p>
                </div>
                <div class="row">
                    <label for="" class="label col s3">Numéro de téléphone: </label>
                    <p class="content col s9">{{$eleve->num_de_telephone}}</p>    
                </div>
                <a href="{{url('demandes')}}" class="btn green">Retour!</a>
          </div>          
</div>
@endsection