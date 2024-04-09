<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    public function index()
    {
        // Vérifiez si la session contient déjà des réponses
        // Si oui, redirigez vers la première question du questionnaire
        if (session()->has('reponse_1')) {
            return redirect()->route('questionnaire.show', 1);
        }

        // Sinon, affichez la page avec la liste des questionnaires
        $questions = [
            1 => 'Quelle est votre couleur préférée ?',
            2 => 'Quel est votre animal préféré ?',
            3 => 'Quel est votre plat préféré ?',
            // Ajoutez autant de questions que nécessaire
        ];

        return view('questionnaire.index', compact('questions'));
    }

    public function repondre(Request $request)
    {
        // Validez la réponse ici si nécessaire

        // Stockez la réponse dans la session ou faites autre chose avec les données
        $request->session()->put('reponse_' . $request->input('question'), $request->input('reponse'));

        // Passez à la question suivante
        $request->session()->put('question', $request->input('question') + 1);

        // Redirigez vers la page du questionnaire
        return redirect()->route('questionnaire.index');
    }

    public function fin()
    {
        return view('fin');
    }
}