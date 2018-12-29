<?php

namespace App\Http\Controllers;

use function foo\func;
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

        $tables = \App\Table::with('users')->get();

        $collection = collect(array_fill(0, 125, 1));
        switch ($collection->count() % 4) {
            case 1:
                $customTablesCount = $collection->count() - 9;
                $normalUsers = $collection->slice(0, $customTablesCount);
                $customTableUsers = $collection->slice($customTablesCount);

                $tablesWith4Users = $normalUsers->chunk(4);
                $tablesWith3Users = $customTableUsers->chunk(3);

                dd($tablesWith4Users, $tablesWith3Users);
            case 2:
            default:
                return $collection->chunck();
        }
        dd($collection->count() % 4);
        $collection->dump()->chunk(4)->dd();



        return view ('adminpages.scorestoevoegen', compact('tables'));

    }
    public function dashboard(){




        return view ('adminpages.dashboard');
    }
}