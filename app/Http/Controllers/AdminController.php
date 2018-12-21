<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function carcassonne(){

        return view ('adminpages.carcassonne');
    }
    public function admintoernooischema(){

    return view ('adminpages.toernooischema');
    }
    public function scorestoevoegen(){

        return view ('adminpages.scorestoevoegen');
    }
    public function dashboard(){

        return view ('adminpages.dashboard');
    }
}