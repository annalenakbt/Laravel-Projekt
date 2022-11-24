<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Einkaufliste;
use App\Models\User;


class EinkauflisteController extends Controller
{
    public function index(){                        // Startseite 
        $einkäufe = Einkaufliste::orderBy('completed')->get();
        // return view('einkaufliste.index')->with(['einkäufe' => $einkäufe]); 
        return view('/einkaufliste/index', ['lists' => auth()->user()->lists()->get()]); 
    }

    public function create(){                       //Erstellung der Einkaufsliste 
        return view('einkaufliste.create');
    }
 
    public function upload(Request $request){       //Rückgabe der eingebene Artikel 
        $data = $request->validate([
            'title' => 'required|max:255'
        ]);
        $data['user_id']=auth()->id(); 
        Einkaufliste::create(
            $data   
        );
        return redirect('/index')->with('success', "Einkauf wurde erfolgreich hinzugefügt!");  //man wird zur Startseite zurcükgeführt, Anzeigen, dass die Eingabe erfolgreich war

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
            return redirect()->back()->with('success', "Einkauf als nicht gekauft markiert");
        }else {
            $einkaufliste->update(['completed' =>true]);
            return redirect()->back()->with('success', "Einkauf als gekauft markiert");
        }
    }

    public function delete($id){
        $einkaufliste = Einkaufliste::find($id);
        $einkaufliste->delete(); 
        return redirect()->back()->with('success', "Einkauf wurde gelöscht");
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function search(Request $request)
    {
    
        $output="";

        $uid = auth()->user()->id;
        
        

        $einkäufe=Einkaufliste::where('title', 'Like', '%'.$request->search. '%')->where('user_id', 'Like', '%'.$uid. '%')->get();

        foreach($einkäufe as $einkauf) {
/*
            $output.=

            '<ul>
            
            <li> '.$einkäufe->title.' </li>

            </>';
*/
            $output.=

            '<li>
            <span>'.$einkauf->title.'</span>
            <a href="'.$einkauf->id . '/edit">Bearbeiten</a>
            <a href="'.$einkauf->id . '/completed">Gekauft</a>
            <a href="'.$einkauf->id . '/delete">Löschen</a>
        </li>';

        }

        return response($output); 
    
    }

        

}
