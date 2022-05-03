<?php

namespace App\Http\Controllers\Pages;

use App\Models\User;
use App\Models\Thread;
use App\Policies\UserPolicy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Pages\ThreadController;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
          return view('pages.threads.index', [
            'threads'       => Thread::orderBy('id', 'desc')->paginate(10),
        ]);
    }
}
