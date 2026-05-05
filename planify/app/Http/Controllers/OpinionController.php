<?php

namespace App\Http\Controllers;

use App\Models\Opinion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OpinionController extends Controller
{
    public function index()
    {
        $opinie = Opinion::where('is_approved', 1)
                        ->orderBy('created_at', 'desc')
                        ->take(3)
                        ->get();
        
        return view('index', compact('opinie'));
    }
    
    public function wszystkie()
    {
        $opinie = Opinion::where('is_approved', 1)
                        ->orderBy('created_at', 'desc')
                        ->paginate(9);
        
        $totalOpinions = Opinion::where('is_approved', 1)->count();
        $averageRating = Opinion::where('is_approved', 1)->avg('rating');
        $satisfiedUsers = Opinion::where('is_approved', 1)
                                ->where('rating', '>=', 4)
                                ->count();
        $satisfiedPercent = $totalOpinions > 0 ? round(($satisfiedUsers / $totalOpinions) * 100) : 0;
        $totalUsers = User::count();
        
        return view('opinie', compact('opinie', 'totalOpinions', 'averageRating', 'satisfiedPercent', 'totalUsers'));
    }
    
public function store(Request $request)
{
    $request->validate([
        'rating' => 'required|integer|min:1|max:5',
        'content' => 'required|string|min:1|max:1000',
    ], [
        'rating.required' => 'Ocena jest wymagana.',
        'content.required' => 'Treść opinii jest wymagana.',
        'content.min' => 'Treść opinii jest wymagana.',
        'content.max' => 'Treść opinii nie może przekraczać 1000 znaków.',
    ]);

    $user = Auth::user();
    
    Opinion::create([
        'user_id' => $user->id,
        'nick' => $user->nick,
        'content' => $request->content,
        'rating' => $request->rating,
        'is_approved' => 1,
        'created_at' => now(),
    ]);

    return redirect()->route('home')->with('success', 'Dziękujemy za Twoją opinię!');
}
}