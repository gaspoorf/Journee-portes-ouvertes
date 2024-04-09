<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

use Barryvdh\DomPDF\PDF;

use Illuminate\Contracts\Config\Repository;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Contracts\View\Factory;
use Dompdf\Dompdf;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }



    public function show()
    {

        if (!Auth::check()) {
            return redirect()->route('login');
        }
        
        $user = Auth::user();
        return view('user', compact('user'));
    }


    public function downloadPDF(Request $request, Dompdf $dompdf, Repository $config, Filesystem $files, Factory $view)
    {
        $user = $request->user();
        $destinations = $user->destinations;

        $pdf = new PDF($dompdf, $config, $files, $view);

        $pdf->loadView('pdf.pdf', compact('destinations'));

        // Télécharger PDF
        return $pdf->download('JPO_IUT_Chambéry.pdf');

    }

}
