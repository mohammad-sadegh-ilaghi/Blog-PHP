<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contactUs(){
        return Inertia::render('Contact');
    }
    
}
