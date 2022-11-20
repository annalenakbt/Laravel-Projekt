<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Einkaufliste; 

class EinkauflisteController extends Controller
{
    public function index(){                        // Startseite 
        $einkäufe = Einkaufliste::all();
        return view('einkaufliste.index')->with(['einkäufe' => $einkäufe]); 
    }

    public function create(){                       //Erstellung der Einkaufsliste 
        return view('einkaufliste.create');
    }
 
    public function upload(Request $request){       //Rückgabe der eingebene Artikel 
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $einkauf = $request->title;
        Einkaufliste::create(['title' => $einkauf]);
        return redirect()->back()->with('success', "Einkauf wurde erfolgreich hinzugefügt!");  //man wird zur Startseite zurcükgeführt, Anzeigen, dass die Eingabe erfolgreich war

    }

    public function edit($id){
        return view('einkaufliste.edit')->with(['id' => $id]);
    }
}
