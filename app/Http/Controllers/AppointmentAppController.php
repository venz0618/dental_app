<?php

namespace App\Http\Controllers;

use App\Models\Appointment_app;
use App\Models\Services;
use App\Models\Dentist;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
class AppointmentAppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Services::where('service_status', 1)->get();
        $dentist = Dentist::where('dentist_status', 1)->get();

        return view('home.appointment_app', compact('services','dentist'));
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
        $app = new Appointment_app();
        $app->users_id      =   $request->users_id;
        $app->services_id   =   $request->services_id;
        $app->dentists_id   =   $request->dentists_id;
        $app->date          =   $request->date;
        $app->time          =   $request->time;
        $app->save();
        Alert::success('Submitted', 'Appointment successfully Submitted');
        return redirect('/');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appointment_app  $appointment_app
     * @return \Illuminate\Http\Response
     */
    public function show(Appointment_app $appointment_app)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appointment_app  $appointment_app
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment_app $appointment_app)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appointment_app  $appointment_app
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment_app $appointment_app)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appointment_app  $appointment_app
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appointment_app $appointment_app)
    {
        //
    }
}
