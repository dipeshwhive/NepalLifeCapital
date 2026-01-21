<?php

namespace App\Http\Controllers;

use App\Models\EventSetup;

class EventController extends Controller
{
    public function eventIndex(){

        $events = EventSetup::where('IsActive',1)
        ->get();

        return view('events.eventList',compact('events'));
    }
    public function eventDetail($slug){
        $detail = EventSetup::where('slug',$slug)
        ->first();
        return view('events.eventDetail',compact('detail'));
    }
}
