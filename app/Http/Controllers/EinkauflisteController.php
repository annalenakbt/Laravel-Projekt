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
        $einkaufliste = $request->title;
        Einkaufliste::create(['title' => $einkaufliste]);
        return redirect()->back()->with('success', "Einkauf wurde erfolgreich hinzugefügt!");  //man wird zur Startseite zurcükgeführt, Anzeigen, dass die Eingabe erfolgreich war

    }

    public function edit($id){
        $einkaufliste = Einkaufliste::find($id);
        $updateTitle = $einkaufliste->title; 
        return view('einkaufliste.edit')->with(['id' => $id, 'einkaufliste' => $einkaufliste]);
    }

    public function update(Request $request){
        $request->validate([
            'title' => 'required|max:255'
        ]);
        $updateEinkaufliste = Einkaufliste::find($request->id);
        $updateEinkaufliste->update(['title' => $request->title]);
        return redirect('/index')->with('success', "Einkaufliste wurde erfolgreich geupdatet");
    }

    public function completed($id){
        $einkaufliste = Einkaufliste::find($id);
        if ($einkaufliste->completed){
            $einkaufliste->update(['completed' => false]);
            return redirect()->back()->with('success', "Einkauf als gekauft markiert");
        }else {
            $einkaufliste->update(['completed' =>true]);
            return redirect()->back()->with('success', "Einkauf als gekauft markiert");
        }
    }
}
