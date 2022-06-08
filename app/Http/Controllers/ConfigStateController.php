<?php

namespace App\Http\Controllers;

use App\Models\ConfigState;

class ConfigStateController extends Controller
{
    public function index()
    {
        $configState = ConfigState::all();

        return view('admin.module-system-configuration.config-state-index', compact('configState'));
    }

    public function create()
    {
        return view('admin.module-system-configuration.config-state-create');
    }

    public function store()
    {
        request()->validate([
            'parameter' => 'required',
            'index' => 'required',
        ]);

        ConfigState::create([
            'parameter' => strtoupper(request('parameter')),
            'description' => request('description'),
            'index' => request('index'),
        ]);

        return redirect()->route('config-state.index');
    }

    public function edit(ConfigState $configState)
    {
        return view('admin.module-system-configuration.config-state-edit', ['configState' => $configState]);
    }

    public function update($configState)
    {
        request()->validate([
            'parameter' => 'required',
            'index' => 'required',
        ]);

        ConfigState::where('id', $configState)->update([
            'parameter' => request('parameter'),
            'index' => request('index'),
            'description' => request('description'),
        ]);

        return redirect()->route('config-state.index');
    }

    public function destroy(ConfigState $configState)
    {
        $configState->delete();
        return redirect()->route('config-state.index');
    }
}
