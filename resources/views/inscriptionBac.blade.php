@extends('layout.layout')
@section('content')

<div class="container">
<div class="col-md-8 order-md-1">
    <form action='/inscription/bac' method='post' class="needs-validation pb-5" novalidate="">
      @csrf
     
            <label for="nom">nom</label>
            <input name="nom" type="text" class="form-control" id="" placeholder="" value="{{old('nom') ?? ''}}" required="">
            @error('nom')
            <p>{{$message}}</p>
          @enderror
          <br>
            <label for="prénom">prénom</label>
            <input name="prenom" type="text" class="form-control" id="" placeholder="" value="{{old('prenom') ?? ''}}" required="">
            @error('prenom')
            <p>{{$message}}</p>
          @enderror
          <br>
          <label for="branche">branche</label>
          <select name="branche"  class="form-control" id="" placeholder="" value="" required="">
              <option value="scientifique">scientifique</option>
              <option value="2">branche2</option>
              <option value="3">branche3</option>
          </select>
          @error('branche')
          <p>{{$message}}</p>
                    @enderror
                    <br>
                    <label for="dn">date de naissance</label>
                    <input name="dn" type="date" class="form-control" id="" placeholder="" value="{{old('dn') ?? ''}}" required="">
                    @error('dn')
                    <p>{{$message}}</p>
                  @enderror
                  <br>
                  <label for="ln">lieux de naissance</label>
                  <select name="wilaya">
                      @foreach ($wilayas as $wilaya)
                          <option value="{{$wilaya->id}}">{{$wilaya->nom}}</option>
                      @endforeach
                  </select> @error('wilaya')
                  <p>{{$message}}</p>
                @enderror
                  <input name="ln" type="text" class="form-control" id="" placeholder="" value="{{old('ln') ?? ''}}" required="">
                  @error('ln')
                  <p>{{$message}}</p>
                @enderror
                <br>
                <label for="prénomp">prénom pére</label>
                <input name="prenom_p" type="text" class="form-control" id="" placeholder="" value="{{old('prenom_p') ?? ''}}" required="">
                @error('prenom_p')
                <p>{{$message}}</p>
              @enderror
              <br>
              <label for="nomm">nom mére</label>
              <input name="nom_m" type="text" class="form-control" id="" placeholder="" value="{{old('nom_m') ?? ''}}" required="">
              @error('nom_m')
              <p>{{$message}}</p>
            @enderror
            <br>
            <label for="prénomm">prénom mére</label>
            <input name="prenom_m" type="text" class="form-control" id="" placeholder="" value="{{old('prenom_m') ?? ''}}" required="">
            @error('prenom_m')
            <p>{{$message}}</p>
            @enderror
            <br>

        
         
          <label for="region"> choisir une région</label>
          <select name="region" class="form-control" id="region" placeholder="" value="" required=""><br>
              @foreach ($regions as $region)
                  <option value="{{$region->id}}"> {{$region->nom}} </option>
              @endforeach

          </select>
          @error('region')
          <p>{{$message}}</p>
        @enderror
        <br>
        <label for="wilaya"> choisir une wilaya</label>
        <select name="wilaya">
            @foreach ($wilayas as $wilaya)
                <option value="{{$wilaya->id}}">{{$wilaya->nom}}</option>
            @endforeach
        </select> @error('wilaya')
        <p>{{$message}}</p>
      @enderror 
      <br>
      <label for="commune"> choisir une commune</label>
        <select name="commune">
            @foreach ($communes as $commune)
                <option value="{{$commune->id}}">{{$commune->nom}}</option>
            @endforeach
        </select> @error('commune')
        <p>{{$message}}</p>
      @enderror 
      <br>
      <label for="lycée"> choisir un lycée</label>
        <select name="lycee">
            @foreach ($lycees as $lycee)
                <option value="{{$lycee->id}}">{{$lycee->nom}}</option>
            @endforeach
        </select> @error('lycee')
        <p>{{$message}}</p>
      @enderror 
      <br>

      
       
              
  
    
          <label for="nar">nom-arabe</label>
          <input name="nar" type="text" class="form-control" id="" placeholder="" value="{{old('nar') ?? ''}}" required="">
          @error('nar')
          <p>{{$message}}</p>
        @enderror<br>


          <label for="par">prénom-arabe</label>
          <input name="par" type="text" class="form-control" id="" placeholder="" value="{{old('par') ?? ''}}" required=""><br>
          @error('par')
            <p>{{$message}}</p>
          @enderror
          <label for="num_carte">numéro carte nationale</label>
          <input name="num_carte_nationale" type="text" class="form-control" id="num_carte" placeholder="" value="{{old('num_carte_nationale') ?? ''}}" required=""><br>
          @error('num_carte_nationale')
          <p>{{$message}}</p>
        @enderror
        </div>

       <button class="btn waves-effect waves-light green" type="submit">valider
            <i class="material-icons right">send</i><br>
        </button>

    </form>
</div>
</div>
@endsection