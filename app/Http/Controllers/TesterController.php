<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;
use App\Models\Cars;

class TesterController extends Controller
{
    public function index()
    {

        // innerjoin to array
        $usersxcars = DB::table('users')
        ->join('cars','users.uuid','=','cars.uuid')
        ->get();

        $array = json_decode($usersxcars);
        $data = $array[0];

        dd($data);
    }
}
