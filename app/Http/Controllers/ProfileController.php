<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\DB;

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

        return view('Studio/profile', compact('user'));
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

        toast('Your Profile as been updated!','success','top-end')->autoClose(7000);
        return back();
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
        $uploadedImage = $request->foto_profile->move(public_path('storage/images/profile/'.$name.'/fotoprofile'.'/'), $imageName);
        $imagePath = 'storage/images/profile/'.$name.'/fotoprofile'.'/'. $imageName;

        $user->foto_profile = $imagePath;


        $user->save();

        toast('Foto Profile Updated !','success','top-end')->autoClose(7000);
        return back();
    }

    }


