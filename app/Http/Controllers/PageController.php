<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Welcome';
    }

    public function about() {
        return 'Name: [Your Name] <br> NIM: [Your NIM]';
    }

    public function articles($id) {
        return 'Article Page with ID ' . $id;
    }
}