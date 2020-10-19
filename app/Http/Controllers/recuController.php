<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recu;


class recuController extends Controller
{
    public function affiche(Recu $recu)
    {
        return view('recu', [
            "recu"=>$recu
        ]);
          
    }

    public function index()
    {
        // href ='/recu/{{$recu->id}}'
        
        $recus=Recu::get();
        return view('recu_index', [
            "recus"=>$recus
        ]);
          
    }
}
