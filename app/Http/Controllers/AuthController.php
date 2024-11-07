<?php

namespace App\Http\Controllers;

use App\Models\User; // Assurez-vous d'utiliser le modèle User
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
class AuthController extends Controller
{
    // Affiche le formulaire d'inscription
    public function showRegisterForm()
    {
        return view('auth.register');
    }
    // Inscription de l'utilisateur
    public function register(Request $request)
    {
        // Valider les données
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        // Créer l'utilisateur et l'enregistrer dans la base de données
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // Authentifier automatiquement après l'inscription
        Auth::login($user);

        // Rediriger vers la page de tableau de bord
        return redirect()->intended('/login')->with('success', 'inscription réussie! vous pouvez se connecter');
    }
    // Affiche le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Connexion de l'utilisateur
    public function login(Request $request)
    {
        // Valider les données
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tenter de connecter l'utilisateur
        if (Auth::attempt($request->only('email', 'password'))) {
            // Régénérer la session pour éviter les attaques de fixation de session
            $request->session()->regenerate();

            // Rediriger vers le tableau de bord
            return redirect()->intended('/dashboard')->with('success', 'Connexion réussie.');
        }

        // Retourner une erreur si la connexion échoue
        throw ValidationException::withMessages([
            'email' => 'Les identifiants sont incorrects.',
        ]);
    }

    // Déconnexion de l'utilisateur
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Vous êtes déconnecté.');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<style>
  .text-underline {
    text-decoration: underline;
  }
</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow fixed-top">
        <a class="navbar-brand text-white fw-bold  Mon_Portfolio" href="#">Prise de rendez</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon "></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link text-white a1" href="register"><b>Inscription</b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white a2" href="login"><b>Connexion</b></a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white a2" href="login"><b>Deconnexion</b></a>
                </li>
            </ul>
        </div>
    </nav><br><br><br><br>
</body>
</html>
