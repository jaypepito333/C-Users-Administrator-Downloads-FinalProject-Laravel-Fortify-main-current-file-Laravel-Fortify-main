<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PassFlightController extends Controller
{
    public function index(){
        $passangers = DB::table('passangers')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();

        return view('passanger.viewpassperflight',['passangers' => $passangers]);
    }
}
