<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

use App\Models\Owners;

use App\Models\Cars;

use Illuminate\Support\Facades\Auth;

class OwnersController extends Controller


// CREATED WITH ❤︎ Reezky
// http://itsreezky.my.id



// Auth Controller for Login and Register

{

    public function ownprofile() // Page Login
    {
        $owner = Owners::findOrFail(Auth::id());

        $ownerid = Auth::user()->owner_id;
        $ownerdata = Cars::where('owner_id', $ownerid)->get();
        $count = DB::table('cars')->where('owner_id', $ownerid)->count();

        return view('Studio/owner', compact('owner','ownerdata','count'));
    }

    public function ownlogin() // Page Login
    {
        return view('Auth/carsown/login');
    }

    public function ownregister()  // Page Register
    {
        return view('Auth/carsown/register');
    }

    public function ownlogout()  // Page Register
    {

        auth()->guard('owner')->logout();
        Session()->flush();

        toast('Successfully Logout, Thanks for visiting.','success','top-end')->autoClose(7000);
        return view('Auth/carsown/logout');
    }

    public function ownauthenticate(Request $request) //Auth Login
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->guard('owner')->attempt($credentials)) {
            $request->session()->regenerate();

            toast('Successfully Login, Happy RENT !','success','top-end')->autoClose(7000);
            return redirect()->intended('owner/profile');
        }

        toast('ERROR ! Please check your credential','error','top-end')->autoClose(5000);
        return back();
    }

    public function ownstore(Request $request){ //Register Function

        $request->validate([
        'nik' => 'required',
        'nama' => 'required',
        'kelamin' => 'required',
        'email' => 'required|unique:users,email',
        'password' => 'required',
        'confirm-password' => 'required|same:password',
        'hp' => 'required',
        'alamat_garasi' => 'required',
        'kota' => 'required',
        'foto_ktp' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        'status' => 'required',
    ]);

    $name= $request->nama;
    $kode = Str::random(10);

    $imageName = $name.$kode.'.'.$request->foto_ktp->extension();
    $uploadedImage = $request->foto_ktp->move(public_path('storage/images/carsowner/'.$name.'/identity'.'/'), $imageName);
    $imagePath = ('storage/images/carsowner/'.$name.'/identity'.'/'). $imageName;

    $data = $request->except('confirm-password', 'password',);
    $data['password'] = Hash::make($request->password);

    $owner = Owners::create($data);
    $owner->foto_ktp = $imagePath;


    $owner->save();

    toast('Account Created Successfully, Please wait for your account to be checked','success','top-end')->autoClose(7000);
    return redirect('owner/login');
}
public function update(Request $request, $id)

    {
        request()->validate([
            'alamat_garasi' => 'required',
            'hp' => 'required',
        ]);

        $owner = Owners::find($id);

        $owner->alamat_garasi = $request->alamat_garasi;
        $owner->hp = $request->hp;

        $owner->save();

        toast('Your Profile as been updated!','success','top-end')->autoClose(7000);
        return back();
    }

    public function foto(Request $request, $id)

    {
        request()->validate([
            'foto_profile' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $owner = Owners::find($id);
        $name= Auth::user()->nama;
        $kode = Str::random(10);

        $imageName = $name.$kode.'.'.$request->foto_profile->extension();
        $uploadedImage = $request->foto_profile->move(public_path('storage/images/carsowner/'.$name.'/profile'.'/'), $imageName);
        $imagePath = ('storage/images/carsowner/'.$name.'/profile'.'/'). $imageName;

        $owner->foto_profile = $imagePath;

        $owner->save();

        toast('Foto Profile Updated !','success','top-end')->autoClose(7000);
        return back();
    }



}
