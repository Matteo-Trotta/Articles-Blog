<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $adminRequests = User::where('is_admin', Null)->get();
        $revisorRequests = User::where('si_revisor', Null)->get();
        $writerRequests = User::where('is_writer', null)->get();
        return view('admin.dashboartd', compact('adminRequests', 'revisorRequests', 'writeRequests', 'writerRequests'));
    }
}
