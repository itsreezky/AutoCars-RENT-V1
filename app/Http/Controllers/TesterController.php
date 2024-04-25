<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use App\Models\Users;
use App\Models\Cars;

class TesterController extends Controller
{
    public function index()
    {

        $cardata = Cars::inRandomOrder()->get();

        $usersxcars = DB::table('users')
        ->join('cars','users.uuid','=','cars.uuid')
        ->get();

        $userxcar = json_decode($usersxcars);
        $cars = Cars::whereIn('uuid' == 'uuid');
        return view('tester', compact('usersxcars','userxcar'));
    }
}
