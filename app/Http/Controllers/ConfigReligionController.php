<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfigReligion;

class ConfigReligionController extends Controller
{
    public function getData()
    {
        $data = ConfigReligion::all();
        return view('admin.module-registration.student-registration', ['data' => $data]);
    }
}
