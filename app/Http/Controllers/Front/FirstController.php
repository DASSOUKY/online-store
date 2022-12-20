<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FirstController extends Controller {
    public function __construct() {
        // $this -> middleware('auth') -> except('login');
        // $this -> middleware('auth');
    }

    public function login() {
        return 'hi';
    }

    public function logout() {
        return 'bye';
    }

    public function index() {
        return view('welcome');
    }
}
