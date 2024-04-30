<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;

use App\Models\Cars;


class CarsController extends Controller

// CREATED WITH ❤︎ Reezky
// http://itsreezky.my.id

// Controller for Garage Page and Controlling Car Data / Mobil Data

{
    /**
     * Display a listing of the resource.
     */

    public function index()

        {

            $owner = Auth::user()->owner_id;
            $cardata = Cars::where('owner_id', $owner)->get();

            return view('Studio/garage', compact('owner','cardata'));
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){

        $data = $request->validate([
            'owner_id' => 'required',
            'merk' => 'required',
            'model' => 'required',
            'plat' => 'required',
            'transmisi' => 'required',
            'seat' => 'required',
            'bahan_bakar' => 'required',
            'keterangan' => 'required',
            'tarif' => 'required',
            'foto_mobil' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'status' => 'required',

        ]);

        $name= Auth::user()->nama;
        $kode = Str::random(10);

        $imageName = $name.$kode.'.'.$request->foto_mobil->extension();
        $uploadedImage = $request->foto_mobil->move(public_path('storage/images/profile/'.$name.'/cars'.'/'), $imageName);
        $imagePath = ('storage/images/profile/'.$name.'/cars'.'/'). $imageName;


            $mobil = Cars::create($data);
            $mobil->foto_mobil = $imagePath;


            $mobil->save();

            toast('Congratulation ! Car Added Successfully','success','top-end')->autoClose(7000);
            return back();

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)

        {

            request()->validate([
                'tarif' => 'required',
                'keterangan' => 'required',
            ]);

            $upmobil = Cars::find($id);

            $upmobil->tarif = $request->tarif;
            $upmobil->keterangan = $request->keterangan;

            $upmobil->save();

            toast('Congratulation ! Car Updated Successfully','success','top-end')->autoClose(7000);
            return back();

        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Cars::destroy($id);

        toast('Congratulation ! Car Deleted Successfully','success','top-end')->autoClose(7000);
        return back();

    }

}
