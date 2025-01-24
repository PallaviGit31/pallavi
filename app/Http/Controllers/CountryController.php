<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Country;
use App\Models\State;
use App\Models\City;

class CountryController extends BaseController
{
    public function getStates(Country $country)
    {
        return $country->states()->select('id', 'name')->get();
    }

    public function getCities(State $state)
    {
        return $state->cities()->select('id', 'name')->get();
    }
}