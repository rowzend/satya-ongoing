<?php

namespace App\Http\Controllers\Verifikator\Auth;

use App\Http\Controllers\Controller;
use App\Models\Verifikator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('verifikator.auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . Verifikator::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $verifikator = Verifikator::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($verifikator));

        Auth::guard('verifikator')->login($verifikator);

        return redirect(route('verifikator.dashboard', absolute: false));
    }
}