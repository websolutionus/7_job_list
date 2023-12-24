<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LocationController extends Controller
{
    /** get all the states of a country by id
     * @param $countryId
     */
    function getStates(string $countryId) : Response {
        $states = State::select(['id', 'name', 'country_id'])->where('country_id', $countryId)->get();
        return response($states);
    }
}
