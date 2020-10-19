<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Diplome;
use App\Models\Demande;
use App\Models\Region;
use App\Models\Wilaya;
class DemandesController extends Controller
{
    public function affiche()
        {
            $regions = Region::get();
            $wilayas = Wilaya::get();
            return view('demande')->with([
                'regions'=>$regions,
                'wilayas'=>$wilayas
                ]);
        }
        
    public function create()
        {
        
            
        /* $table->string('mois');
        $table->integer('annee');
        $table->integer('region_id')->unsigned();
        $table->foreign('region_id')->references('id')->on('regions');
        $table->string('matricule');
        $table->integer('branche_id')->unsigned();
        $table->foreign('branche_id')->references('id')->on('branches');
        $table->string('nom');
        $table->string('prenom');
        $table->date('date_de_naissance');
        $table->integer('wilaya_id')->unsigned();
        $table->foreign('wilaya_id')->references('id')->on('wilayas');
        $table->string('lieux');
        $table->text('adresse');
        $table->integer('num_de_telephone')->nullable();
        $table->string('email')->nullable();
        $table->string('nom_arabe');
        $table->string('prenom_arabe'); */

        $attributes = request()->validate([
                'mois' =>['string','required'],
                'annee' =>['string','required'],
                'region' =>['string','required'],
                'matricule' =>['string','required'],
                'branche' =>['string','required'],
                'nom' =>['string','required'],
                'prenom' =>['string','required'],
                'dn' =>['string','required'],
                'wilaya' =>['string','required'],
                'ln' =>['string','required'],
                'adr' =>['string','required'],
                'nt' =>['string','nullable'],
                'email' =>['string','nullable'],
                'nar' =>['string','required'],
                'par' =>['string','required'],
        ]);

        $result = Diplome::
            where('mois',$attributes['mois'])
            ->where('annee',$attributes['annee'])
            ->where('branche_id',$attributes['branche'])
            ->where('nom',$attributes['nom'])
            ->where('prenom',$attributes['prenom'])
            ->where('date_de_naissance',$attributes['dn'])
            ->where('wilaya_id',$attributes['wilaya'])
            ->where('lieux',$attributes['ln'])
            ->where('nom_arabe',$attributes['nar'])
            ->where('prenom_arabe',$attributes['par'])
            ->first();
            
            if ($result) {
                 if ($result->recu == 0) {
                 Diplome::where('id',$result->id)->update(['recu'=>'1']);
                    
                   $demande = Demande::create([
                    'mois' =>$attributes['mois'],
                    'annee' =>$attributes['annee'],
                    'region_id' =>$attributes['region'],
                    'matricule' =>$attributes['matricule'],
                    'branche_id' =>$attributes['branche'],
                    'nom' =>$attributes['nom'],
                    'prenom' =>$attributes['prenom'],
                    'date_de_naissance' =>$attributes['dn'],
                    'wilaya_id' =>$attributes['wilaya'],
                    'lieux' =>$attributes['ln'],
                    'adresse' =>$attributes['adr'],
                    'num_de_telephone' =>$attributes['nt'],
                    'email' =>$attributes['email'],
                    'nom_arabe' =>$attributes['nar'],
                    'prenom_arabe' =>$attributes['par'],
                   ]);
                    
                    
                    echo(" demande aprouver ");}
                 else { echo "demande refusé ";}
            
            }
            else {echo " donnée non valide ";}
            
    }

    public function index(){
        $demandes = Demande::all();
        return view('demandes.index',['demandes' => $demandes]);
    }
    public function show($id){
        $demande = Demande::findOrFail($id);

        return view('demandes.show',['demande' => $demande]);
    }
        
}
