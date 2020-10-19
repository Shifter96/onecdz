@extends('layout.layout')
@section('content')
<div class="container">

<div class="row">
    <form class="col s12" method="post" action="{{url('/diplome/demande/')}}">
    @method('post')
    @csrf
      <div class="row">
        <div class="input-field col s6">
          <input placeholder="Placeholder" name="nom" id="first_name" type="text" class="validate">
          <label for="first_name">Nom</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" name="prenom" class="validate">
          <label for="last_name">Prénom</label>
        </div>
      </div>
      <button class="btn waves-effect waves-light green" type="submit" name="action">Demander
        <i class="material-icons right">send</i>
     </button>
    </form>
  </div>
</div>


@endsection