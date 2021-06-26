<?php

namespace App\Http\Controllers\Map;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * @group Maps Controller
 *
 * Handle Homepage functionalities
 */

class MapsController extends Controller
{
    /**
     * Maps View
     *
     * Returns the view of map
     */
    public function getLocation(){
        return view ('frontend.map');
    }
}
