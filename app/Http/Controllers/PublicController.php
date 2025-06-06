<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Mail\CareerRequestMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class PublicController extends Controller implements HasMiddleware
{
    public function homepage()
    {
        $articles = Article::where('is_accepted', true)->orderBy('created_at', 'desc')->take(4)->get();
        return view('welcome', compact('articles'));
    }

    public function careers()
    {
        return view('careers');
    }


    public function careersSubmit(Request $request)
    {

        $request->validate([
            'role' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);


        $user = Auth::user();
        $role = $request->role;
        $email = $request->email;
        $message = $request->message;
        $info = compact('role', 'email', 'message');

        Mail::to('admin@theaulabpost.it')->send(new CareerRequestMail($info));

        switch ($role) {
            case 'admin':
                $user->is_admin = null;
                break;
            case 'revisor':
                $user->is_revisor = null;
                break;
            case 'writer':
                $user->is_writer = null;
                break;
        }

        $user->update();
        // ERRORE DI INTELEPHENSE?
        return redirect(route('homepage'))->with('message', 'Mail inviata con successo!');
    }

    public static function middleware()
    {
        return
            [
                new Middleware('auth', except: ['homepage']),
            ];
    }


   
}
