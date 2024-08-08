<?php

namespace App\Http\Controllers; 


use App\Models\Posts;

use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    public function index(): Response
    {
        $posts = Posts::with('user')->latest()->get();

        return Inertia::render('Dashboard', [
            'posts' => $posts
        ]);
    }
}