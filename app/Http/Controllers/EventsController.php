<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function events() {
        return view("modules/events/events");
    }

    public function cityEvents($cityId) {
        return view("modules/events/cityEvents");
    }

    public function showEvent($cityId, $eventId) {
        return view("modules/events/showEvent");
    }

}
