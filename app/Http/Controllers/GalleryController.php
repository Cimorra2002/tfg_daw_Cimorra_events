<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{

    public function gallery() {
        return view("modules/gallery/gallery");
    }

    public function showMoogli()
    {
        $imagenesMoogli = [
            'images/fiesta2/IMG_11.jpg',
            'images/fiesta2/IMG_4.jpg',
            'images/fiesta2/IMG_7.jpg',
            'images/fiesta2/IMG_1.jpg',
            'images/fiesta2/IMG_2.jpg',
            'images/fiesta2/IMG_3.jpg',
            'images/fiesta2/IMG_5.jpg',
            'images/fiesta2/IMG_6.jpg',
            'images/fiesta2/IMG_8.jpg',
            'images/fiesta2/IMG_9.jpg',
            'images/fiesta2/IMG_10.jpg',
            'images/fiesta2/IMG_12.jpg',
            'images/fiesta2/IMG_13.jpg',
            'images/fiesta2/IMG_14.jpg',
            'images/fiesta2/IMG_15.jpg',
            'images/fiesta2/IMG_16.jpg',
            'images/fiesta2/IMG_17.jpg',
            'images/fiesta2/IMG_18.jpg',
            'images/fiesta2/IMG_19.jpg',
            'images/fiesta2/IMG_20.jpg',
            'images/fiesta2/IMG_21.jpg',
            'images/fiesta2/IMG_22.jpg',
        ];

        return view('modules.gallery.moogli', compact('imagenesMoogli'));
    }

    public function showBloody()
    {
        $imagenesBloody = [
            'images/fiesta1/IMG_16.jpg',
            'images/fiesta1/IMG_14.jpg',
            'images/fiesta1/IMG_17.jpg',
            'images/fiesta1/IMG_1.jpg',
            'images/fiesta1/IMG_2.jpg',
            'images/fiesta1/IMG_3.jpg',
            'images/fiesta1/IMG_4.jpg',
            'images/fiesta1/IMG_5.jpg',
            'images/fiesta1/IMG_6.jpg',
            'images/fiesta1/IMG_7.jpg',
            'images/fiesta1/IMG_8.jpg',
            'images/fiesta1/IMG_9.jpg',
            'images/fiesta1/IMG_10.jpg',
            'images/fiesta1/IMG_11.jpg',
            'images/fiesta1/IMG_12.jpg',
            'images/fiesta1/IMG_13.jpg',
            'images/fiesta1/IMG_15.jpg',
            'images/fiesta1/IMG_18.jpg',
            'images/fiesta1/IMG_19.jpg',
        ];

        return view('modules.gallery.bloody', compact('imagenesBloody'));
    }

}
