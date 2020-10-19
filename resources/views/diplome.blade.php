@extends('layout.layout')
@section('content')
<div class="container" data-aos="fade-right">
        <div class="row tabss">
            <div class="col s12">
              <ul class="tabs">
                <li class="tab col s3"><a href="#test1" class="tabs-title">demande test final</a></li>
                <li class="tab col s3"><a class="tabs-title " href="#test2">Reimprimer</a></li>
                <li class="tab col s3"><a href="#test3" class="tabs-title">Suivie</a></li>
                <li class="tab col s3"><a href="#test4" class="tabs-title">Informations</a></li>
              </ul>
            </div>
            <div id="test1" class="col s12"><div class="container" >
                <h4 class="center-align">Formulaire d'informations</h4>
                <label ><h3 class="green-text">La periode</h3> </label>
                <div class="row">
                    <div class="input-field col s12 m6">
                        
                        <select class="icons ">
                          <option value="" disabled selected>Mois...</option>
                          <option value="" >Juin</option>
                          <option value="" >Septembre</option>
                          <option value="" >Octobre</option>
                        </select>
                       
                      </div>
                      <div class="input-field col s12 m6">
                        <select class="icons">
                          <option value="" disabled selected>Année...</option>
                          <option value=""  class="left">1963</option>
                          <option value=""  class="left">1964</option>
                          <option value=""  class="left">1965</option>
                          <option value=""  class="left">1966</option>
                          <option value=""  class="left">1967</option>
                          <option value=""  class="left">1968</option>
                          <option value=""  class="left">1969</option>
                          <option value=""  class="left">1970</option>
                          <option value=""  class="left">1971</option>
                          <option value=""  class="left">1972</option>
                          <option value=""  class="left">1973</option>
                          <option value=""  class="left">1974</option>
                          <option value=""  class="left">1975</option>
                          <option value=""  class="left">1976</option>
                          <option value=""  class="left">1977</option>
                          <option value=""  class="left">1978</option>
                          <option value=""  class="left">1979</option>
                          <option value=""  class="left">1980</option>
                          <option value=""  class="left">1981</option>
                          <option value=""  class="left">1982</option>
                          <option value=""  class="left">1983</option>
                          <option value=""  class="left">1984</option>
                          <option value=""  class="left">1985</option>
                          <option value=""  class="left">1986</option>
                          <option value=""  class="left">1987</option>
                          <option value=""  class="left">1988</option>
                          <option value=""  class="left">1989</option>
                          <option value=""  class="left">1990</option>
                          <option value=""  class="left">1991</option>
                          <option value=""  class="left">1992</option>
                          <option value=""  class="left">1993</option>
                          <option value=""  class="left">1994</option>
                          <option value=""  class="left">1995</option>
                          <option value=""  class="left">1996</option>
                          <option value=""  class="left">1997</option>
                          <option value=""  class="left">1998</option>
                          <option value=""  class="left">1999</option>
                          <option value=""  class="left">2000</option>
                          <option value=""  class="left">2001</option>
                          <option value=""  class="left">2002</option>
                          <option value=""  class="left">2003</option>
                          <option value=""  class="left">2004</option>
                          <option value=""  class="left">2005</option>
                        </select> <br>
                        
                     
                        
                        <div class="input-field col s12 m6">
                          <div class=" row">
                            <select >
                              <option value="" disabled selected>Choose your option</option>
                              <option value="1">Option 1</option>
                              <option value="2">Option 2</option>
                              <option value="3">Option 3</option>
                            </select>
                            <label>Le bureau le plsu proche</label>
                          </div>
                        </div>
                    
                            
                    
                    
                    </div>
                </div>
            </div>
          </div>
            <div id="test2" class="col s12">Test 2</div>
            <div id="test3" class="col s12">Test 3</div>
            <div id="test4" class="col s12">Test 4</div>
          </div>        
    </div>
    @endsection