<?php

namespace App\Http\Controllers;

use App\Models\ConfigCity;
use Illuminate\Http\Request;

class ConfigCityController extends Controller
{
    public function index()
    {
        $dataCity = \DB::table('config_city')
                    ->join('config_state', 'config_city.config_state_fk', '=', 'config_state.id')
                    ->select('config_city.*', 'config_state.parameter as state')
                    ->get();
              
        return view('admin.module-system-configuration.config-city',
        compact('dataCity'));
    }

    public function create()
    {
        return view('admin.module-system-configuration.config-city-create');
    }
}
