<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Wilaya;
use App\Models\Lycee;
use App\Models\Commune;
use App\Models\Eleve;
use App\Models\Bachelier;
use App\Models\Candidat;
use App\Models\Recu;
use App\Models\User;


class BachelierController extends Controller
{

    public function affiche() {
        $regions = Region::get();
        $wilayas = Wilaya::get();
        $communes = Commune::get();
        $lycees = Lycee::get();
        return view('inscriptionBac')->with([
            'regions'=>$regions,
            'wilayas'=>$wilayas,
            'lycees'=>$lycees,
            'communes'=>$communes
            ]);
    }
    public function create(Request $request){
        
        

            $attributes = request()->validate([
            'nom' =>['string','required'],
            'prenom' =>['string','required'],
            'branche' =>['string','required'],
            'dn' =>['date','required'],
            'ln' =>['string','required'],
            'prenom_p' =>['string','required'],
            'nom_m' =>['string','required'],
            'prenom_m' =>['string','required'],
            'region' =>['string','required'],
            'wilaya' =>['string','required'],
            'commune' =>['string','required'],
            'lycee' =>['string','required'],
            'nar' =>['string','required'],
            'par' =>['string','required'],
            'num_carte_nationale' =>['string','required'],

    ]);
    
    
    $result = Eleve::where('branche',$request->input('branche'))
    ->where('nom',$request->input('nom'))
    ->where('prenom',$request->input('prenom'))
    ->where('date_de_naissance',$request->input('dn'))
    ->where('wilaya_id',$request->input('wilaya'))
    ->where('lieux',$request->input('ln'))
    ->where('nom_arabe',$request->input('nar'))
    ->where('prenom_arabe',$request->input('par'))
    ->where('num_piece_identite',$request->input('num_carte_nationale'))
    ->first(); 
if($result){
    $result_id = $result->id;
}
    
    
    $ok = Bachelier::where('branche',$request->input('branche'))
    ->where('nom',$request->input('nom'))
    ->where('prenom',$request->input('prenom'))
    ->where('date_de_naissance',$request->input('dn'))
    ->where('wilaya_id',$request->input('wilaya'))
    ->where('lieux',$request->input('ln'))
    ->where('nom_arabe',$request->input('nar'))
    ->where('prenom_arabe',$request->input('par'))
    ->where('num_piece_identite',$request->input('num_carte_nationale'))
    ->first(); 
   
    if ($result){
        if ($ok){
            echo('deja inscrit');
        }else{
            $bachelier = Bachelier::create([
    'branche'=>$request->input('branche'),
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
    'lycee_id'=>$request->input('lycee'),
    'nom_arabe'=>$request->input('nar'),
    'prenom_arabe'=>$request->input('par'),
    'num_piece_identite'=>$request->input('num_carte_nationale'),
   ]);
  
    $username=($attributes['nom'].$attributes['prenom']. $result_id);
    $pass= Str::random(8);
    

            
   $recu= Recu::create([
    'nom'=>$request->input('nom'),
    'prenom'=>$request->input('prenom'),
    'date_de_naissance'=>$request->input('dn'),
    'lieu_de_naissance'=>$request->input('ln'),
    'username'=>$username,
    'password'=>$pass,
   ]);
   $recu->save();
   return redirect('/recu/'.$recu->id);
        }
    }else{ echo('donnée erronée');

    }
}
public function index(){
    $bacheliers = Bachelier::all();
    $candidats = Candidat::all();
    return view('inscriptions.index',['bacheliers' => $bacheliers, 'candidats' => $candidats]);

}
public function show($id){
    $bachelier = Bachelier::findOrFail($id);
    return view('inscriptions.show',['eleve' => $bachelier, 'bachelier' => true]);
}
    
}