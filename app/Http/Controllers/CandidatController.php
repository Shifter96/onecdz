<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Wilaya;
use App\Models\Cem;
use App\Models\Commune;
use App\Models\Eleve;
use App\Models\Candidat;

class CandidatController extends Controller
{
    public function affiche() {
        $regions = Region::get();
        $wilayas = Wilaya::get();
        $communes = Commune::get();
        $cems = Cem::get();
        return view('inscriptionBem')->with([
            'regions'=>$regions,
            'wilayas'=>$wilayas,
              'cems'=>$cems,
            'communes'=>$communes
         ]);

}
     public function create(request $request) {
      $attributes = request()->validate([
        'nom' =>['string','required'],
        'prenom' =>['string','required'],
        'dn' =>['date','required'],
        'ln' =>['string','required'],
        'prenom_p' =>['string','required'],
        'nom_m' =>['string','required'],
        'prenom_m' =>['string','required'],
        'region' =>['string','required'],
        'wilaya' =>['string','required'],
        'commune' =>['string','required'],
        'cem' =>['string','required'],
        'nar' =>['string','required'],
        'par' =>['string','required'],
        'num_carte_nationale' =>['string','required'],

]);

$result = Eleve::where('nom',$request->input('nom'))
->where('prenom',$request->input('prenom'))
->where('date_de_naissance',$request->input('dn'))
->where('wilaya_id',$request->input('wilaya'))
->where('lieux',$request->input('ln'))
->where('nom_arabe',$request->input('nar'))
->where('prenom_arabe',$request->input('par'))
->first(); 
dd();



$ok = Candidat::where('nom',$request->input('nom'))
->where('prenom',$request->input('prenom'))
->where('date_de_naissance',$request->input('dn'))
->where('wilaya_id',$request->input('wilaya'))
->where('lieux',$request->input('ln'))
->where('nom_arabe',$request->input('nar'))
->where('prenom_arabe',$request->input('par'))
->first(); 

if ($result){
    if ($ok){
        echo 'vous etes deja inscrit' ;
    }else{
        $candidat = Candidat::create([
'nom'=>$request->input('nom'),
'prenom'=>$request->input('prenom'),
'date_de_naissance'=>$request->input('dn'),
'wilaya_id'=>$request->input('wilaya'),
'lieux'=>$request->input('ln'),
'prenom_pere'=>$request->input('prenom_p'),
'nom_mere'=>$request->input('nom_m'),
'prenom_mere'=>$request->input('prenom_m'),
'region_id'=>$request->input('region'),
'wilaya_residence_id'=>$request->input('wilaya'),
'commune_id'=>$request->input('commune'),
'cem_id'=>$request->input('cem'),
'nom_arabe'=>$request->input('nar'),
'prenom_arabe'=>$request->input('par'),
'num_piece_identite'=>$request->input('num_carte_nationale'),
]);
echo('inscription réussite ');
    }
}else{ echo('donnée erronée');

}
}
public function show($id){
    $candidat = Candidat::findOrFail($id);
    return view('inscriptions.show',['eleve' => $candidat, 'bachelier' => false]);
}
}
        

    
     
