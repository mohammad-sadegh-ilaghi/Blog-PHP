<?php

namespace App\Http\Controllers;
use Inertia\Inertia;
use Illuminate\Http\Request;

class AuthorizeController extends Controller
{

    public function login(){
        return Inertia::render('Auth/Login');
    }

    public function register(){
        return Inertia::render('Auth/Register');
    } 
    public function logout(){
        return Inertia::render('/');
    }

}
