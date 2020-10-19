<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <!--Import materialize.css-->
     <!-- Compiled and minified CSS -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{asset('style.css')}}">
     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
     <script
     src="https://code.jquery.com/jquery-2.2.4.js"
     integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
     crossorigin="anonymous"></script>
     
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <!--AOS Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  </head>

  <body>
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="/inscription/bem">BEM</a></li>
        <li><a href="/inscription/bac">BAC</a></li>
    </ul>
    <ul id="dropdownCO" class="dropdown-content">
      <li><a href="#!">Paramètres</a></li>
      <form action={{route("logout")}}method="post">
        
        @csrf
        <li><a class="waves-effect" href="javascript:;" onclick="document.getElementById('logout-form').submit()">Déconnecter</a></li>
      </form>
  </ul>
<div class="navbar-fixed">

    <nav>
        <div class="nav-wrapper green">
            <div class="container">
          <a href="file:///C:/Users/alinware/Desktop/site/interface/onec.html" class="brand-logo center"><img src="C:/wamp64/www/onecdz/onec/logo.png" alt=""></a>
          <ul class="left hide-on-med-and-down">
            @guest
                <li><span>nope</span></li>
            @else
                 <li><span>coo</span></li>
            @endguest
              @if (auth()->user() && auth()->user()->hasRole('admin'))
                   <li><span>admin</span></li>
             
             
             
             
                   @endif
            <li><a href="/"class="hoverable">Acceuil</a></li>

            <li class="active"><a href="/demande" class="hoverable">Demande Diplome</a></li>
            
            <li><a href="/annonce"class="hoverable">Annonces</a></li>
          </ul>
          <ul id="nav-mobile" class="hide-on-med-and-down">   
            <li><a class="dropdown-trigger" href="#" data-target="dropdown1" class="hoverable">Inscription<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
          <ul id="nav-mobile" class="right hide-on-med-and-down">  
            @guest
              <li><a class="waves-effect waves-light btn modal-trigger green" href="#modal1">Se connecter</a>
            @else
              <li><a class="dropdown-trigger" href="#" data-target="dropdownCO" class="hoverable">{{Auth::user()->name}}
                    <i class="material-icons right">arrow_drop_down</i>
                  </a>
              </li>
            @endguest          
            
          </ul>
        </div>
    </nav>
</div>
    
    @Yield('content')
    <div class="mt-5">
      <footer class="page-footer green " >
        <div class="container">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">ONEC </h5>
              <p class="grey-text text-lighten-4">Le Bureau National des Examens et Concours. </p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Media:</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!"><i class="small material-icons">accessibility</i></li>
                
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2020 Copyright US
          <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
          </div>
        </div>
      </footer>
    </div>

    
<div id="modal1" class="modal">
  <form class="col s12" method="post" action="{{ route('login')}}">
        @csrf
    <div class="modal-content">
      <h4>Connecter  Vous</h4>

      <div class="row">
        
          <div class="row">
            <div class="input-field col s12">
                <input name="email" id="email" type="email" class="validate" autocomplete>
              <label for="email">Email</label><br>
              <br>
              @error('email')
               <p>{{$message}}</p>
              @enderror 
            </div>
          </div>
          <div class="row">
            <div class="input-field col s12">
              <input name="password" id="password" type="password" class="validate" autocomplete>
              <label for="password">Mot de Passe</label>
            </div>
            @error('password')
               <p>{{$message}}</p>
            @enderror  
          </div>
        
      </div>
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary">
       se connecter
    </button>
    </div>
  </form>
</div>
@if (auth()->user() && auth()->user()->hasRole('admin'))

<ul id="slide-out" class="sidenav">
  <li><div class="user-view">
    <a href="#user"><i class="large material-icons center-align green-text">account_circle</i></a>
    <a href="#name"><span class="green-text name  center-align">{{Auth::user()->name}}</span></a>
    <a href="#email"><span class="green-text email  center-align">{{Auth::user()->email}}</span></a>
  </div></li>
  <li><a href="{{url('/employees')}}"><i class="material-icons">border_color</i>gérer les employes</a></li>
  <li><a href="#!"><i class="material-icons">add_circle</i>ajouter une annonce</a></li>
  <li><a href="{{url('/demandes')}}"><i class="material-icons">border_color</i>Consulter les demandes</a></li>
  <li><a href="#!"><i class="material-icons">border_color</i>Consulter les inscriptions</a></li>
  <li><div class="divider"></div></li>
  <li><a class="waves-effect" href="javascript:;" onclick="document.getElementById('logout-form').submit()"><i class="material-icons">exit_to_app</i> {{ __('Logout') }}</a></li>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
  
</ul>

@else
@if (auth()->user() && auth()->user()->hasRole('employe'))

<ul id="slide-out" class="sidenav">
  <li><div class="user-view">
    <a href="#user"><i class="large material-icons center-align green-text">account_circle</i></a>
    <a href="#name"><span class="green-text name  center-align">{{Auth::user()->name}}</span></a>
    <a href="#email"><span class="green-text email  center-align">{{Auth::user()->email}}</span></a>
  </div></li>
  <li><a href="#!"><i class="material-icons">add_circle</i>ajouter une annonce</a></li>
  <li><a href="#!"><i class="material-icons">border_color</i>Consulter les demandes</a></li>
  <li><a href="#!"><i class="material-icons">border_color</i>Consulter les inscriptions</a></li>
  <li><div class="divider"></div></li>
  <li><a class="waves-effect" href="javascript:;" onclick="document.getElementById('logout-form').submit()"><i class="material-icons">exit_to_app</i> {{ __('Logout') }}</a></li>
  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>
       </ul>
@endif
@endif
@guest

@else
<a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons medium right-icon" id="right-icon">chevron_right</i></a>
@endguest


<script>
      document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    options = {};
    optionsslider = {height:600};
    optionscollapsible = {};
    optionsmodal = {} ;
    var instances = M.Dropdown.init(elems, options);
    
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, optionsslider);
    var elems = document.querySelectorAll('.collapsible');
    var instances = M.Collapsible.init(elems, optionscollapsible);
    var elems = document.querySelectorAll('.modal');
    var instances = M.Modal.init(elems, optionsmodal);
    var el = document.querySelectorAll('.tabs');
    var instance = M.Tabs.init(el, options);
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);

  });
</script>
<script>
        document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.dropdown-trigger');
    options = {};
    var instances = M.Dropdown.init(elems, options);
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });
  
      var item = document.getElementById("right-icon");
      item.addEventListener("mouseover", func, false);
      item.addEventListener("mouseout", func1, false);

      function func()
      {  // not needed since item is already global, 
        // I am assuming this is here just because it's sample code?
        // var item = document.getElementById("button"); 
        item.classList.add("z-depth-4");
      }

      function func1()
      {  
        item.classList.remove("z-depth-4");
      }
</script>
<script>
    AOS.init();
  </script>
  </body>
</html>