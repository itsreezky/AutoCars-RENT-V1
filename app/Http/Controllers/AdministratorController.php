<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;

use Yajra\DataTables\Facades\DataTables;

use App\Models\Owners;

use App\Models\Cars;

use App\Models\Users;

use App\Models\Administrators;

use Yajra\DataTables\Contracts\DataTable;

class AdministratorController extends Controller


// CREATED WITH ❤︎ Reezky
// http://itsreezky.my.id



// Auth Controller for Login and Register

{

    public function administratorhome(Request $request) // Home Page
    {
        //get all users
        $allusers = Users::get();
        //count total users
        $usersCount = count($allusers);

        //get all cars
        $allcars = Cars::get();
        //count total cars
        $carsCount = count($allcars);

        //get all owners
        $allowners = Owners::get();
        //count total owners
        $ownersCount = count($allowners);


        //save data to view
        return view(
            'Administrator.index',
            compact('allusers', 'usersCount', 'allcars', 'carsCount', 'allowners', 'ownersCount')
        );
    }

    public function administratorusers(Request $request) // Home Page
    {
            //get all users
        $allusers = Users::get();
        //count total users
        $usersCount = count($allusers);

            //save data to view
            return view(
                'Administrator.data-users',
                compact('allusers', 'usersCount')
            );
        }
        public function administratorowners(Request $request) // Home Page
        {

            //get all owners
            $allowners = Owners::get();
            //count total owners
            $ownersCount = count($allowners);

                //save data to view
                return view(
                    'Administrator.data-owners',
                    compact('allowners', 'ownersCount')
                );
            }
            public function administratorcars(Request $request) // Home Page
            {

                //get all cars
                $allcars = Cars::get();
                //count total cars
                $carsCount = count($allcars);

                    //save data to view
                    return view(
                        'Administrator.data-cars',
                        compact('allcars', 'carsCount')
                    );
                }

    public function administratorin() // Page Login
    {
        return view('Auth/administrator/login');
    }

    public function administratorcheck(Request $request) //Auth Login
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (auth()->guard('administrator')->attempt($credentials)) {
            $request->session()->regenerate();

            toast('Successfully Login, Happy RENT !','success','top-end')->autoClose(7000);
            return redirect()->intended('/administrator');
        }

        toast('ERROR ! Please check your credential','error','top-end')->autoClose(5000);
        return back();
    }

    public function administratorout()  // Page Register
    {

        auth()->guard('administrator')->logout();
        Session()->flush();

        toast('Successfully Logout, Thanks for visiting.','success','top-end')->autoClose(7000);
        return view('Auth/administrator/logout');
    }
}
