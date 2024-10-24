<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestEvent;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $events = Event::orderBy('created_at','desc')->get();
        return view('admin.events.index',compact('events'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderBy('created_at','desc')->get();
        return view('admin.events.create',compact('categories'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(RequestEvent $request)
    {
        $validatedData = $request->validated();
        Event::create($validatedData);
        
        return redirect()->route('events.index')->with('success', 'Event created successfully.');
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
    public function edit(Event $event)
    {
        $categories = Category::orderBy('created_at','desc')->get();
        return view('admin.events.edit', compact('categories' ,'event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(RequestEvent $request, Event $event)
    {
        $validated = $request->validated();
        $event->update($validated);
        return redirect()->route('events.index')
                         ->with('success', 'Event updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $event = Event::find($id);
        if ($event && $event->attedEvents->count() == 0 ) {
            $event->delete();
            session()->flash('success', 'Event deleted successfully!');
        } else {
            session()->flash('error', 'Event cannot delete.');
        }
        return redirect()->route('events.index');
    }
}
