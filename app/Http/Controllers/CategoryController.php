<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function categoties(){
        return Inertia::render('Categories/Categories');
    }
    public function create(){
        return Inertia::render("Categories/Create");
    }
    public function update(){
        return Inertia::render('Categories/Update');
    }
}
