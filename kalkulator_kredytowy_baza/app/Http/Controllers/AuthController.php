<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    // Wyswietl formularz logowania
    public function showLogin()
    {
        return view('login');
    }

    // Obsluga logowania
    public function login(Request $request)
    {
        $login = $request->input('login');
        $haslo = $request->input('haslo');

        // Hardcoded użytkownicy (bez bazy danych)
        $users = [
            'manager' => [
                'haslo' => 'manager123',
                'name' => 'Manager Agata',
                'role' => 'manager'
            ],
            'user' => [
                'haslo' => 'user123',
                'name' => 'Agata Uzytkownik',
                'role' => 'user'
            ]
        ];

        // Sprawdzenie czy użytkownik istnieje
        if (isset($users[$login]) && $users[$login]['haslo'] === $haslo) {
            // Zaloguj - zapisz w sesji
            Session::put('user', [
                'login' => $login,
                'name' => $users[$login]['name'],
                'role' => $users[$login]['role']
            ]);
            return redirect('/')->with('success', 'Zalogowano pomyslnie!');
        }

        // Błąd logowania
        return back()->with('error', 'Nieprawidlowy login lub haslo!');
    }

    // Wylogowanie
    public function logout()
    {
        Session::forget('user');
        return redirect('/')->with('success', 'Wylogowano pomyslnie!');
    }
}