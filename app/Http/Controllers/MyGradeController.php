<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class MyGradeController extends Controller
{
    public function index () {
        return Inertia::render('User/MyGrades');
    }
}
