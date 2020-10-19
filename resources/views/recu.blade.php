@extends('layout.layout')
@section('content')
<div><p>
    id: {{$recu->id}}
nom: {{$recu->nom}}
prenom: {{$recu->prenom}}
date n: {{$recu->date_de_naissance}}
lieu de : {{$recu->lieu_de_naissance}}

nom util: {{$recu->username}}
mdp : {{$recu->password}}
</p></div>
@endsection
