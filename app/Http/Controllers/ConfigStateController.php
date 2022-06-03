<?php

namespace App\Http\Controllers;

use App\Models\ConfigState;
use Illuminate\Http\Request;

class ConfigStateController extends Controller
{
    public function index()
    {
        $dataState = ConfigState::all();

        return view('admin.module-system-configuration.config-state',
        compact('dataState'));
    }
}
