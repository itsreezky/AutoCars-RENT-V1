<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;
use App\Models\Cars;


class MarketController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $users = Users::get();
        $cars = Cars::get();
        $cardata = Cars::inRandomOrder()->get();

        return view('Market/market', compact('users','cars','user','cardata'));
    }

    // public function show(string $id)
    // {
    //     //get cars by ID
    //     $car = Cars::findOrFail($id);

    //     // innerjoin to array
    //     $userxcars = DB::table('users')
    //     ->join('cars','users.uuid','=','cars.uuid')
    //     ->get();

    //     $array = json_decode($userxcars);
    //     $data = $array[$id];

    //     //render view with cars
    //     return view('detail-cars', compact('car', 'data'));
    // }

}
