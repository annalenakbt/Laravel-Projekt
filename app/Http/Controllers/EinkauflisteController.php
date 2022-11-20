<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Einkaufliste; 

class EinkauflisteController extends Controller
{
    public function index(){                        // Startseite 
        return "Hi";
    }

    public function create(){                       //Erstellung der Einkaufsliste 
        return view('einkaufliste.create');
    }
 
    public function upload(Request $request){       //Rückgabe der eingebene Artikel 
        $einkauf = $request->title;
        Einkaufliste::create(['title' => $einkauf]);
        return redirect()->back()->with('success', "Einkauf wurde erfolgreich hinzugefügt!");

    }

    public function edit(){
        return "Hiii";
    }
}
