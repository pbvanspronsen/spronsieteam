<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome(){

        return view ('welcome');
    }
    public function overons(){

        return view ('userpages.overons');
    }
    public function fotoalbum(){

        return view ('userpages.fotoalbum');
    }
    public function contact(){

        return view ('userpages.contact');
    }
    public function registratievoltooid(){

        return view ('userpages.registratievoltooid');
    }
    public function ranglijst(){

        return view ('userpages.ranglijst');
    }
    public function algemeneranglijst2019(){

        return view ('userpages.algemeneranglijst2019');
    }
    public function toernooiregels(){

        return view ('userpages.toernooiregels');
    }
    public function algemenevoorwaarden(){

        return view ('userpages.algemenevoorwaarden');
    }
    public function toernooischema(){

        return view ('userpages.toernooischema');
    }
    public function carcassonne2019(){

        return view ('userpages.carcassonne2019');
    }
    public function inschrijven(){

        return view ('userpages.inschrijven');
    }
}
