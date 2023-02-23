<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Models\User;
use Illuminate\Http\Request;

class ExtraPageController extends Controller
{
    public function greenish(){
        return view("greenish");
    }

    public function loadingData(){
         return view('welcome',['paniers'=>Panier::latest()->simplePaginate(2)]);
        
    }

    public function allPaniers(){
        return view('paniers',['paniers'=>auth()->user()->paniers()->paginate(2)]);
    }
    
    
}
