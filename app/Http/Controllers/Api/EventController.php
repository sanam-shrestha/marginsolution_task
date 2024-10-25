<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EventResource;
use App\Models\Event;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     public function index(): AnonymousResourceCollection
     {
         return EventResource::collection(Event::latest()->get());
     }
     
 

    /**
     * Display the specified resource.
     */
 
     public function singleData($id)
     {
         $event = Event::where('id', $id)->first();
         if ($event === null) {
             return response()->json([
                 'success' => false,
                 'message' => 'Event not found.',
                 'data' => []
             ], 404);
         }
         $data = new EventResource($event);
         return response()->json([
             'success' => true,
             'message' => 'Single event retrieved successfully.',
             'data' => $data
         ], 200); // 200 OK
     }




     
}
