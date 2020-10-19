@extends('layout.layout')
@section('content')
    
  <div class="container"> 
    <h3><span class="green-text">Examens</span> scolaires</h3>
    <hr class="ligne">
    <div class="row">
      <div class="col m4"><div class="card green">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="C:/Users/alinware/Desktop/onec/onec5.png">
        </div>
        <div class="card-content">
          <span class="card-title activator  white-text">Card Title<i class="material-icons right white-text">more_vert</i></span>
          <p><a href="http://www.onec.dz/avis/img%D8%A8%D9%84%D8%A7%D8%BA%20%20%D8%A7%D8%AE%D8%AA%D8%A8%D8%A7%D8%B1%20%D9%85%D8%A7%D8%AF%D8%A9%20%D8%A7%D9%84%D8%AA%D8%B1%D8%A8%D9%8A%D8%A9%20%D8%A7%D9%84%D8%A8%D8%AF%D9%86%D9%8A%D8%A9%20%D9%88%20%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6%D9%8A%D8%A9%20%D9%84%D9%84%D8%A3%D8%AD%D8%B1%D8%A7%D8%B1%202020.pdf" class="green-text text-accent-2">This is a link</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div></div>
      <div class="col m4"><div class="card green">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="C:/Users/alinware/Desktop/onec/onec5.png">
        </div>
        <div class="card-content">
          <span class="card-title activator  white-text">Card Title<i class="material-icons right">more_vert</i></span>
          <p><a class="green-text text-accent-2" href="http://www.onec.dz/avis/img%D8%A8%D9%84%D8%A7%D8%BA%20%20%D8%A7%D8%AE%D8%AA%D8%A8%D8%A7%D8%B1%20%D9%85%D8%A7%D8%AF%D8%A9%20%D8%A7%D9%84%D8%AA%D8%B1%D8%A8%D9%8A%D8%A9%20%D8%A7%D9%84%D8%A8%D8%AF%D9%86%D9%8A%D8%A9%20%D9%88%20%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6%D9%8A%D8%A9%20%D9%84%D9%84%D8%A3%D8%AD%D8%B1%D8%A7%D8%B1%202020.pdf">This is a link</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div></div>
      <div class="col m4"><div class="card green">
        <div class="card-image waves-effect waves-block waves-light">
          <img class="activator" src="C:/Users/alinware/Desktop/onec/onec5.png">
        </div>
        <div class="card-content">
          <span class="card-title activator  white-text">Card Title<i class="material-icons right">more_vert</i></span>
          <p><a href="http://www.onec.dz/avis/img%D8%A8%D9%84%D8%A7%D8%BA%20%20%D8%A7%D8%AE%D8%AA%D8%A8%D8%A7%D8%B1%20%D9%85%D8%A7%D8%AF%D8%A9%20%D8%A7%D9%84%D8%AA%D8%B1%D8%A8%D9%8A%D8%A9%20%D8%A7%D9%84%D8%A8%D8%AF%D9%86%D9%8A%D8%A9%20%D9%88%20%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6%D9%8A%D8%A9%20%D9%84%D9%84%D8%A3%D8%AD%D8%B1%D8%A7%D8%B1%202020.pdf" class="green-text text-accent-2">This is a link</a></p>
        </div>
        <div class="card-reveal">
          <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
          <p>Here is some more information about this product that is only revealed once clicked on.</p>
        </div>
      </div></div>
    </div>
    <h3><span class="green-text">Examens</span> Métiers</h3>
    <hr class="ligne">
  </div>

 
   
  



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
  
@endsection
