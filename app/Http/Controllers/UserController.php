<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\User;
use Illumninate\Support\Facades\auth;
 
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user(); // Retrieve the currently authenticated user...
        return view('users.profile.index')->with('user',$user); 
        
    }
}