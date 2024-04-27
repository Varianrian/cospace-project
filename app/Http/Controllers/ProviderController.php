<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
    public function redirect(string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback(string $provider)
    {
        try {
            $providerUser = Socialite::driver($provider)->user();
            $user = User::where('email', $providerUser->getEmail())->first();

            if (!$user) {
                $user = User::create([
                    'name' => $providerUser->getName(),
                    'email' => $providerUser->getEmail(),
                    'provider' => $provider,
                    'provider_id' => $providerUser->getId(),
                    'provider_token' => $providerUser->token,
                ]);
            } else {
                $user->update([
                    'provider' => $provider,
                    'provider_id' => $providerUser->getId(),
                    'provider_token' => $providerUser->token,
                ]);
            }

            Auth::login($user, true);

            return redirect('/')->with('success', 'Successfully authenticated with ' . $provider);
        } catch (\Exception $e) {
            return redirect()->route('auth.login.view')->with('error', 'Unable to authenticate with ' . $provider);
        }
    }
}
