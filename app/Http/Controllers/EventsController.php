<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventsController extends Controller
{

    public function events() {
        return view("modules/events/events");
    }

    public function maintenance() {
        return view("modules/events/maintenance");
    }

    public function cityEvents($cityId) {
        return view("modules/events/cityEvents");
    }

    public function showEvent($cityId, $eventId) {
        return view("modules/events/showEvent");
    }

}
