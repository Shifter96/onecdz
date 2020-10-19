@extends('layout.layout')
@section('content')

<div class="container full-height">
<h3>Liste des employées</h3>
<hr>
<div class="fixed-action-btn">
  <a class="btn-floating btn-large red modal-trigger" href="#modal22">
    <i class="large material-icons green">add_circle</i>
  </a>
  <div id="modal22" class="modal">
    <div class="container">
        <h4><span class="green-text">Ajouter </span>un employée</h4>
        <hr>
        <form action="/employees" method="POST">
        @csrf
        <div class="row">
        <div class="input-field col s12 m12">
          <input id="name" name="name" type="text" class="validate">
          <label for="name">Name</label>
        </div>
        <div class="input-field col s12 m12">
          <input id="email" type="email" name="email" class="validate">
          <label for="email">E-mail</label>
        </div>
        <div class="input-field col s12">
          <input id="password" type="password" name="password" class="validate">
          <label for="password">Password</label>
        </div>
        <button type="submit" class="btn green">Ajouter</button>
      </div>
        </form>
    </div>
  </div>

</div>
<ul class="collection">
@foreach($employees as $employee)

    <li class="collection-item avatar">
        <div>
        <span class="title name">{{$employee->name}}</span>
      <p class="info">{{$employee->email}}<br>
         {{$employee->created_at}}
      </p>
        </div>

      <form action="/employees/{{$employee->id}}" class="delete_form" method="post">
            @csrf
            @method('delete')
            <button class="delete_button" type="submit"><i class="material-icons">delete</i></button>
      </form>
      
    </li>

@endforeach
</ul>
</div>

@endsection