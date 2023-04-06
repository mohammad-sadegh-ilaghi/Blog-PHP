<?php

namespace App\Http\Controllers;
use Inertia\Inertia;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function show(){
        return Inertia::render('Test/show');
    }
}
