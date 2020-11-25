<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware(['auth']);
    }
    public function index(){
        return view('dashboard',[
            'user_count' => User::get()->count(),
            'post_count' => Post::get()->count()
        ]);
    }
}
