<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;

use App\Models\Users;

class VerifiedController extends Controller
{

    public function index()
    {
        $user = Users::findOrFail(Auth::id());

        return view('Auth/users/verified', compact('user'));
    }

    public function verify(Request $request, $id){ //Register Function


        request()->validate([
            'uuid'=>'required',
            'nik' => 'required',
            'nama' => 'required',
            'kelamin' => 'required',
            'email' => 'required|email|unique:users,email, ' . $id . ',id',
            'hp' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'foto_ktp' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'status' => 'required',
            // 'url_photo' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $user = Users::find($id);

        $name= Auth::user()->nama;
        $kode = Str::random(12);

        $imageName = $name.$kode.'.'.$request->foto_ktp->extension();
        $uploadedImage = $request->foto_ktp->move(public_path('storage/images/profile/'.$name.'/verified'.'/'),$imageName);
        $imagePath = 'storage/images/profile/'.$name.'/verified'.'/'. $imageName;



        $user->uuid = $request->uuid;
        $user->nik = $request->nik;
        $user->nama = $request->nama;
        $user->kelamin = $request->kelamin;
        $user->email = $request->email;
        $user->hp = $request->hp;
        $user->alamat = $request->alamat;
        $user->kota = $request->kota;
        $user->foto_ktp = $imagePath;
        $user->status = $request->status;

        $user->save();

        toast('Your Account Successfully Registered To Verified Member, Happy RENT !','success','top-end')->autoClose(7000);
        return redirect('profile');
    }


}
