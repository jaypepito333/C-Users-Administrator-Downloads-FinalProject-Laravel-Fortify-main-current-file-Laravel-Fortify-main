<?php

namespace App\Http\Controllers;

use App\Models\Flights;
use App\Models\Luggages;
use Illuminate\Http\Request;

class JoinTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Luggages::join('passangers', 'passangers.pid','=','luggages.pid')
                        ->join('bag_statuses', 'bag_statuses.bag_tagID', '=','lugguges.cardID')
                        ->get([
                            'passanger.pid','passanger.name','luggages.cardID','bag_statuses.Terminal_at'
                        ]);

        $data = Flights::join('luggages', 'luggages.pid','=','passangers.pid')
                        ->join('flights', 'flights.fligh_no', '=','passangers.flight_no')
                        ->get([
                            'passangers.pid','passangers.name','luggages.cardID','flight.flight_status'
                        ]);
                        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
