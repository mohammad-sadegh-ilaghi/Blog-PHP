<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PostsController extends Controller
{
    public function create(){
        return Inertia::render('Post/Create');
    }
    public function post($id){
        return Inertia::render('Post/Post');
    }
    public function update($id){
        return Inertia::render('Post/Update');
    }
    public function posts(){
        return Inertia::render('Post/Posts');
    }
    // public function 
}
