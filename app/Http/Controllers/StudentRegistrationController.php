<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\RequestException;
use http\Env\Response;
use Illuminate\Http\Request;

use App\Models\ConfigCity;
use App\Models\ConfigEthnicity;
use App\Models\ConfigPostcode;
use App\Models\ConfigReligion;
use App\Models\ConfigState;
use Illuminate\Support\Facades\DB;


class StudentRegistrationController extends Controller
{
    public function index()
    {
        $listCity = ConfigCity::all();
        $listEthnicity = ConfigEthnicity::all();
        $listReligion = ConfigReligion::all();
        $listState = ConfigState::all();

        return view('admin.module-registration.student-registration',
            compact('listCity', 'listEthnicity', 'listReligion', 'listState'));
    }

    public function getCity($stateID)
    {
        try {
            $listCity = DB::table('config_city')
                ->where('config_state_fk', $stateID)
                ->first();

            http_response_code(200);
            return response([
                'message' => 'Data successfully retrieved.',
                'data' => $listCity
            ]);

        } catch (RequestException $r) {

            http_response_code(400);
            return response([
                'message' => 'Failed to retrieve data.',
                'errorCode' => 4103
            ], 400);
        }
    }

    public function getState($cityId)
    {
        try {
            $data = ConfigCity::select('config_state_fk')
                ->where('id', $cityId)
                ->first();

            http_response_code(200);
            return response([
                'message' => 'Data successfully retrieved.',
                'data' => $data
            ]);

        } catch (RequestException $r) {

            http_response_code(400);
            return response([
                'message' => 'Failed to retrieve data.',
                'errorCode' => 4103
            ], 400);
        }
    }
}
