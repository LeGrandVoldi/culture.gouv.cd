<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class evenementController extends Controller
{
    public function agenda()
    {
         // Récupérer tous les événements
        $evenements = Event::all();

        // Organiser les événements par mois
        $eventsData = [];

        foreach ($evenements as $evenement) {
            $mois = $evenement->mois;

            if (!isset($eventsData[$mois])) {
                $eventsData[$mois] = [];
            }

            $eventsData[$mois][] = [
                'date' => $evenement->date_event,
                'category' => $evenement->category,
                'title' => $evenement->title,
                'description' => $evenement->description,
                'lieu' => $evenement->lieu,
                'pays' => $evenement->pays,
                'image' => $evenement->image,
            ];
        }

        // Passer les données à la vue
         return view('agenda', compact('eventsData'));
    }

    public function store(Request $request, Event $event)
    {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move($_SERVER['DOCUMENT_ROOT'] . '/fichiers', $filename);

        $filePath = 'fichiers/' . $filename; // Variable contenant le chemin du fichier

        $event->nom_evenement = $request->nom_evenement;
        $event->organisateur = $request->organisateur;
        $event->presentation = $request->presentation;
        $event->cible_principale = $request->cible_principale;
        $event->domaine_artistique = $request->domaine_artistique;
        $event->lieu = $request->lieu;
        $event->date_evenement = $request->date_evenement;
        $event->deja_lieu = $request->deja_lieu;
        $event->nombre_editions = $request->nombre_editions;
        $event->mesures_securitaires = $request->mesures_securitaires;
        $event->frequence = $request->frequence;
        $event->type_lieu = $request->type_lieu;
        $event->capacite_accueil = $request->capacite_accueil;
        $event->acces_pmr = $request->acces_pmr;
        $event->billetterie = $request->billetterie;
        $event->lien_visuel = $request->lien_visuel;
        $event->email = $request->email;
        $event->telephone = $request->telephone;
        $event->image = $filePath;
        $event->valider = 'false';

        $event->save();

        return redirect()->route('dashboard',['email' => $request->email])->with('ok','ok');
    }

    public function delete($id)
    {
        $event = Event::findOrFail($id);
        $event->delete();
        return redirect()->route('evenement')->with('ok','ok');
    }

    public function valider($id)
    {
        $event = Event::findOrFail($id);
        $event->valider = 'true';
        $event->save();

        return redirect()->route('admin')->with('ok', 'Événement validé avec succès');
    }
    


}
