<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestAttendee;
use App\Models\Attendee;
use App\Models\Event;
use Illuminate\Http\Request;

class AttendeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $attendees = Attendee::orderBy('created_at','desc')->get();
        return view('admin.attendee.index',compact('attendees'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $events = Event::orderBy('created_at','desc')->get();
        return view('admin.attendee.create',compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestAttendee $request)
    {
        $validatedData = $request->validated();
        Attendee::create($validatedData);
      
        return redirect()->route('attendees.index')->with('success', 'Attendee created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendee $attendee)
    {
        $events = Event::orderBy('created_at','desc')->get();
        return view('admin.attendee.edit', compact('events' ,'attendee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestAttendee $request, Attendee $attendee)
    {
        $validated = $request->validated();
        $attendee->update($validated);
        return redirect()->route('attendees.index')
                         ->with('success', 'Attendee updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $attendees = Attendee::find($id);
        $attendees->delete();
        session()->flash('success', 'Attendees deleted successfully!');
       
        return redirect()->route('attendees.index');
    
    }
}
