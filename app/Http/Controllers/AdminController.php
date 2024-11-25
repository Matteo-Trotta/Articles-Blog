<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $adminRequests = User::whereNull('is_admin')->get();
        $revisorRequests = User::whereNull('is_revisor')->get();
        $writerRequests = User::whereNull('is_writer')->get();

        return view('admin.dashboard', compact('adminRequests', 'revisorRequests', 'writerRequests'));
    }

    public function setAdmin(User $user)
    {
        $user->is_admin = true;
        $user->save();

        return redirect(route('admin.dashboard'))->with('message', "Utente {$user->name} è stato promosso al ruolo di amministratore");
    }

    public function setRevisor(User $user)
    {
        $user->is_revisor = true;
        $user->save();

        return redirect(route('admin.dashboard'))->with('message', "Utente {$user->name} è stato promosso al ruolo di revisore");
    }

    public function setWriter(User $user)
    {
        $user->is_writer = true;
        $user->save();

        return redirect(route('admin.dashboard'))->with('message', "Utente {$user->name} è stato promosso al ruolo di scrittore");
    }


    public function editTag(Request $request, Tag $tag)
    {
        $request->validate([
            'name' => 'required|unique:tags',
        ]);
        return redirect()->back()->with('message', 'Tag aggiornatto correttamente');
    }

    public function deleteTag(Tag $tag)
    {
        foreach ($tag->articles as $article) {
            $article->tags()->detach($tag);
        }
        $tag->delete();
        return redirect()->back()->with('message', 'Tag eliminato correttamente');
    }


    public function editCategory(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories',
        ]);
        return redirect()->back()->with('message', 'Categoria aggiornata correttamente');
    }

    public function deleteCategory(Category $category){
        $category->delete();
        return redirect()->back()->with('message', 'Categoria eliminata correttamente');
    }
}
