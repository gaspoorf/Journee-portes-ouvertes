<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Destination;

use App\Models\userhasdestination;

use Illuminate\Http\Request;

class MapController extends Controller
{
    public function map()
    {
        return view('map');
    }


    public function IUT()
    {
        return view('IUT');
    }


    public function MMI()
    {
        return view('MMI');
    }
    
    public function GCCD()
    {
        return view('GCCD');
    }

    public function GACO()
    {
        return view('GACO');
    }

    public function PEC()
    {
        return view('PEC');
    }

    public function SGM()
    {
        return view('SGM');
    }

    //controller for user visite room

    public function storeVisit(Request $request, $destinationId)
    {
        // Vérifiez si l'utilisateur est connecté
        if ($user = $request->user()) {
            // Enregistrez la visite dans la base de données
            UserHasDestination::create([
                'user_id' => $user->id,
                'destination_id' => $destinationId
            ]);

            // Redirigez l'utilisateur vers la page précédente ou une autre page
            return redirect()->back()->with('success', 'Visite enregistrée avec succès!');
        }

        // Redirigez l'utilisateur vers la page de connexion s'il n'est pas connecté
        return redirect()->route('login')->with('error', 'Veuillez vous connecter pour effectuer cette action.');
    }
   






}
