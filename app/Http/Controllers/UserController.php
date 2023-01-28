<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show Register Form
    public function create() {
        return view('users.register');
    }

    // Create new user
    public function store() {

    }

    // Login User Form
    public function login() {
        return view('users.login');
    }

    
}
