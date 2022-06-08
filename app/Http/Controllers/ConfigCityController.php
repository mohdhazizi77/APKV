<?php

namespace App\Http\Controllers;

use App\Models\ConfigCity;
use App\Models\ConfigState;

use Illuminate\Support\Facades\DB;

class ConfigCityController extends Controller
{
    public function index()
    {
        $dataCity = DB::table('config_city')
            ->join('config_state', 'config_city.config_state_fk', '=', 'config_state.id')
            ->select('config_city.*', 'config_state.parameter as state')
            ->get();

        return view(
            'admin.module-system-configuration.config-city-index',
            compact('dataCity')
        );
    }

    public function create()
    {
        $listState = ConfigState::all();

        return view('admin.module-system-configuration.config-city-create', compact('listState'));
    }

    public function store()
    {
        request()->validate([
            'config_state_fk' => 'required',
            'parameter' => 'required',
            'index' => 'required'
        ]);

        ConfigCity::create([
            'config_state_fk' => request('config_state_fk'),
            'parameter' => strtoupper(request('parameter')),
            'description' => request('description'),
            'index' => request('index'),
        ]);

        return redirect()->route('config-city.index');
    }

    public function edit($id)
    {
        $listState = ConfigState::all();
        $selectedCity = ConfigCity::where('id', $id)->first();

        // dd($selectedState);

        return view('admin.module-system-configuration.config-city-edit', compact('listState', 'selectedCity'));
    }

    public function update($configCity)
    {
        request()->validate([
            'config_state_fk' => 'required',
            'parameter' => 'required',
            'index' => 'required',
        ]);

        ConfigCity::where('id', $configCity)->update([
            'config_state_fk' => request('config_state_fk'),
            'parameter' => request('parameter'),
            'index' => request('index'),
            'description' => request('description'),
        ]);

        return redirect()->route('config-city.index');
    }


    public function destroy(ConfigCity $configCity)
    {
        $configCity->delete();
        return redirect()->route('config-city.index');
    }
}
