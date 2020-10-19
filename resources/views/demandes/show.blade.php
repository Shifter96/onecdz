@extends('layout.layout')
@section('content')

<div class="container">
        <div class="card-panel white">
                <h2 class="title">Réçu</h2>
                <hr>
                <div class="row">
                    <label for="" class="label col s3">matricule:</label>
                    <p class="content col s9">{{$demande->matricule}}</p>    
                </div>
                <div class="row">
                    <label for="" class="label col s3">Nom:</label>
                    <p class="content col s9">{{$demande->nom}}</p>    
                </div>
                <div class="row">
                    <label for="" class="label col s3">Prénom:</label>
                    <p class="content col s9">{{$demande->prenom}}</p>
                </div>
                <div class="row">
                    <label for="" class="label col s3">Date de naissance:</label>
                    <p class="content col s9">{{$demande->date_de_naissance}}</p>
                </div>
                <div class="row">
                    <label for="" class="label col s3">Lieux de naissance: </label>
                    <p class="content col s9">{{$demande->lieux}}</p>
                </div>
                <div class="row">
                    <label for="" class="label col s3">Numéro de téléphone: </label>
                    <p class="content col s9">{{$demande->num_de_telephone}}</p>    
                </div>
                <a href="{{url('demandes')}}" class="btn green">Retour!</a>
          </div>          
</div>
@endsection