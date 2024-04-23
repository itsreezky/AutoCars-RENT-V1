<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Cars;
use App\Models\Users;
use Illuminate\Support\Str;


class GarageController extends Controller

// CREATED WITH ❤︎ Reezky
// http://itsreezky.my.id

// Controller for Garage Page and Controlling Car Data / Mobil Data

{
    /**
     * Display a listing of the resource.
     */

    public function index()

        {

            $useruuid = Auth::user()->uuid;
            $cardata = Cars::where('uuid', $useruuid)->get();

            return view('Studio/garage', compact('useruuid','cardata'));
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

        $data = $request->validate([
            'uuid' => 'required',
            'merk' => 'required',
            'model' => 'required',
            'plat' => 'required',
            'tarif' => 'required',
            'keterangan' => 'required',
            'spesifikasi' => 'required',
            'foto_mobil' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'status' => 'required',

        ]);

        $name= Auth::user()->nama;
        $kode = Str::random(10);

        $imageName = $name.$kode.'.'.$request->foto_mobil->extension();
        $uploadedImage = $request->foto_mobil->move(public_path('storage/images/cars/'.$name.'/'), $imageName);
        $imagePath = ('storage/images/cars/'.$name.'/'). $imageName;


            $mobil = Cars::create($data);
            $mobil->foto_mobil = $imagePath;


            $mobil->save();

            return redirect()->back()->with('notifadd',"CAR SUCCESSFULLY ADDED TO MARKET.");

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)

        {

            request()->validate([
                'merk' => 'required',
                'model' => 'required',
                'plat' => 'required',
                'tarif' => 'required',
                'keterangan' => 'required',
                'spesifikasi' => 'required',
            ]);

            $upmobil = Cars::find($id);

            $upmobil->merk = $request->merk;
            $upmobil->model = $request->model;
            $upmobil->plat = $request->plat;
            $upmobil->tarif = $request->tarif;
            $upmobil->keterangan = $request->keterangan;
            $upmobil->spesifikasi = $request->spesifikasi;

            $upmobil->save();

            return redirect()->back()->with('notifup',"CAR SUCCESSFULLY UPDATED.");

        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cars::destroy($id);
        return redirect()->back()->with('notifdel',"CAR SUCCESSFULLY DELETED.");

    }
}
