<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citizen;
use App\Models\Region;
use App\Models\Specialist;


class CitizensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $citizens = Citizen::orderByDesc('created_at')->paginate(15);
        
        return view('citizens.index', [
            'citizens' => $citizens
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $citizen = new Citizen();

        $regions = Region::select('id','name_uz')->get();
        $specialists = Specialist::select('id','name_uz')->get();

        return view('citizens.create', [
            'citizen' => $citizen,
            'regions' => $regions,
            'specialists' => $specialists
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        $citizen = new Citizen;
        $citizen->fullname = $request->fullname;
        $citizen->passport = $request->seria.$request->number;
        $citizen->region_id = $request->region_id;
        $citizen->city_id = $request->city_id;
        $citizen->phone_number = $request->phone_number;
        $citizen->skill = $request->skill;
        $citizen->gender = $request->gender;
        $citizen->specialist = $request->specialist;
        $citizen->birthdate = $request->birthdate;
        $citizen->save();

        return redirect()->route('citizens.index');
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
