<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Booking;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return DB::select('CALL ps_bookings');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cars=DB::select('select * from cars');
        $customers=DB::select('select * from customers');
        return [$cars,$customers];
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingRequest $request)
    {
        return Booking::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        return $booking;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        $booking->update($request->all(['status']));
        return $booking;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        return $booking->delete();
    }
}
