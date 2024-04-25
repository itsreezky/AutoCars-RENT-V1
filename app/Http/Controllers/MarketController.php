<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\Users;
use App\Models\Cars;


class MarketController extends Controller
{
    public function index()
    {

        $user = Auth::user();
        $cardata = Cars::inRandomOrder()->get();

        // innerjoin to array
        $usersxcars = DB::table('users')
        ->join('cars','users.uuid','=','cars.uuid')
        ->get();

        $userxcar = json_decode($usersxcars);

        return view('Market/market', compact('user','cardata','userxcar'));
    }

    public function details($kode_mobil)
    {
        $cardata = Cars::inRandomOrder()->get();
        $cars = Cars::where('kode_mobil', $kode_mobil)->first();

        return view('Market/market-detail', compact('cars', 'cardata'));
    }


}
