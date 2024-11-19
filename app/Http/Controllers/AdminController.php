<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $adminRequests = User::where('is_admin', Null)->get();
        $revisorRequests = User::where('is_revisor', Null)->get();
        $writerRequests = User::where('is_writer', null)->get();
        return view('admin.dashboard', compact('adminRequests', 'revisorRequests', 'writerRequests'));
    }


    public function setAdmin(User $user)
    {
        $user->is_admin = true;
        $user->save();
        return redirect(route('admin.dashboard'))->with('message', 'Utente $user->name è stato promosso al ruolo di amministratore');
    }


    public function setrevisor(User $user)
    {
        $user->is_revisor = true;
        $user->save();
        return redirect('route(admin.dashboard)')->with('message', 'Utente $user->name è stato promosso al ruolo di revisore');
    }


    public function setWriter(User $user){

$user->is_writer = true;
$user->save();
return redirect(route('admin.dashboard'))->with('message','Utente $user->name è stato promosso al ruolo di scrittore');

    }
}
