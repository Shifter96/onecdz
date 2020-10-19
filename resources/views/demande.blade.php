@extends('layout.layout')
@section('content')

<div class="container">
<div class="col-md-8 order-md-1 ">

          <form action='/demande/create' method='post'class="needs-validation" novalidate="">
     @csrf
           
                <label for="mois">mois</label>
                <select name="mois" class="form-control" id="" placeholder="" value="" required="">
                    <option value="1">juin</option>
                    <option value="2">septembre</option>
                    <option value="3">octobre</option>
                </select>
                @error('mois')
                <p>{{$message}}</p>
              @enderror
                    <br>
                
                
                <label for="année">année</label>
                <select name="annee" class="form-control" id="" placeholder="" value="" required="">
                    <option value="1">1860</option>
                    <option value="2">1861</option>
                    <option value="3">1862</option>
                </select>
                @error('année')
                <p>{{$message}}</p>
              @enderror
                    <br>
                <label for="région"> choisir une région</label>
                <select name="region" class="form-control" id="region" placeholder="" value="" required=""><br>
                    @foreach ($regions as $region)
                        <option value="{{$region->id}}"> {{$region->nom}} </option>
                    @endforeach
  
                </select>
                @error('région')
                <p>{{$message}}</p>
              @enderror
              <br>
                <label for="matricule">matricule</label>
                <input name="matricule" type="text" class="form-control" id="" placeholder="" value="" required="">
                @error('matricule')
                <p>{{$message}}</p>
              @enderror
              <br>
                <label for="branche">branche</label>
                <select name="branche"  class="form-control" id="" placeholder="" value="" required="">
                    <option value="1">branche1</option>
                    <option value="2">branche2</option>
                    <option value="3">branche3</option>
                </select>
                @error('branche')
                <p>{{$message}}</p>
              @enderror
              <br>
                    
                <label for="nom">nom</label>
                <input name="nom" type="text" class="form-control" id="" placeholder="" value="" required="">
                @error('nom')
                <p>{{$message}}</p>
              @enderror
              <br>
                <label for="prénom">prénom</label>
                <input name="prenom" type="text" class="form-control" id="" placeholder="" value="" required="">
                @error('prénom')
                <p>{{$message}}</p>
              @enderror
              <br>
                <label for="dn">date de naissance</label>
                <input name="dn" type="date" class="form-control" id="" placeholder="" value="" required="">
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
                <input name="ln" type="text" class="form-control" id="" placeholder="" value="" required="">
                @error('ln')
                <p>{{$message}}</p>
              @enderror
              <br>
                <label for="adr">adresse</label>
                <input name="adr" type="text" class="form-control" id="" placeholder="" value="" required="">
                @error('adr')
                <p>{{$message}}</p>
              @enderror
              <br>
                <label for="nt">numéro de telephone</label>
                <input name="nt" type="text" class="form-control" id="" placeholder="" value="" required="">
                @error('nt')
                <p>{{$message}}</p>
              @enderror
              <br>
                <label for="email">E-mail</label>
                <input name="email" type="email" class="form-control" id="" placeholder="" value="" required="">
                @error('email')
                <p>{{$message}}</p>
              @enderror
              <br>
                <label for="nar">nom-arabe</label>
                <input name="nar" type="text" class="form-control" id="" placeholder="" value="" required="">
                @error('nar')
                <p>{{$message}}</p>
              @enderror<br>

                <label for="par">prénom-arabe</label>
                <input name="par" type="text" class="form-control" id="" placeholder="" value="" required=""><br>
                @error('par')
                  <p>{{$message}}</p>
                @enderror
              <div class="col-3 pb-3">
                 <button class="btn btn-block btn-primary" type="submit">valider</button>
              </div>
          </form>
</div>
</div>
@endsection