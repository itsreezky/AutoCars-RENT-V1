<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Users;
use App\Models\Cars;

class ProfileController extends Controller

// CREATED WITH ❤︎ Reezky
// http://itsreezky.my.id

// Controller for Profile Studio and Update Profile Data

{
    public function index()
    {
        $user = Users::findOrFail(Auth::id());

        $useruuid = Auth::user()->uuid;
        $cardata = Cars::where('uuid', $useruuid)->get();

        return view('Studio/profile', compact('user','cardata'));
    }

    public function update(Request $request, $id)

    {
        request()->validate([
            'nama'       => 'required|string|min:2|max:100',
            'email'      => 'required|email|unique:users,email, ' . $id . ',id',
            'alamat' => 'required',
            'hp' => 'required',
            // 'url_photo' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $user = Users::find($id);

        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->hp = $request->hp;

        $user->save();

        return back()->with('status', 'Profile updated!');
    }

    public function foto(Request $request, $id)

    {
        request()->validate([
            'foto_profile' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $user = Users::find($id);
        $name= Auth::user()->nama;
        $kode = Str::random(10);

        $imageName = $name.$kode.'.'.$request->foto_profile->extension();
        $uploadedImage = $request->foto_profile->move(public_path('storage/images/profile/'), $imageName);
        $imagePath = 'storage/images/profile/' . $imageName;

        $user->foto_profile = $imagePath;


        $user->save();

        return back()->with('foto', 'Foto Profile updated!');
    }

    public function show(string $id)
    {
        //get cars by ID
        $car = Cars::findOrFail($id);

        // innerjoin to array
        $usersxcars = DB::table('users')
        ->join('cars','users.uuid','=','cars.uuid')
        ->get();

        $array = json_decode($usersxcars);
        $data = $array[$id];

        //render view with cars
        return view('/profile', compact('car', 'data'));
    }

    }


