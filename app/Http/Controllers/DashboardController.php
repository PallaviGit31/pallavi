<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DashboardController extends Controller
{
  public function index()
  {
    $users = DB::table('users')->select('users.id', 'users.name as username', 'email', 'dob', 'gender', 'users.country_id', 'users.state_id', 'users.city_id','countries.name as country_name', 'states.name as state_name', 'cities.name as city_name' )->join('countries', 'users.country_id', '=', 'countries.id')->join('states', 'users.state_id', '=', 'states.id')->join('cities', 'users.city_id', '=', 'cities.id')->get();
        $data = compact('users');
    return view('content.dashboard.index', $data);
  }

  
}
