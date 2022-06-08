<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\RequestException;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use App\Models\Student;

use App\Models\ConfigState;
use App\Models\ConfigCity;
use App\Models\ConfigEthnicity;
use App\Models\ConfigReligion;

class StudentController extends Controller
{

    public function index()
    {
        $listStudent = Student::all();
        return view('admin.module-registration.student-index', compact('listStudent'));
    }


    public function create()
    {
        $listCity = ConfigCity::all();
        $listEthnicity = ConfigEthnicity::all();
        $listReligion = ConfigReligion::all();
        $listState = ConfigState::all();

        return view(
            'admin.module-registration.student-create',
            compact('listCity', 'listEthnicity', 'listReligion', 'listState')
        );
    }

    public function getCity($stateID)
    {
        try {
            $data = ConfigCity::where('config_state_fk', $stateID)->get();

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

    public function show(Student $student)
    {
        //
    }


    public function edit(Student $student)
    {
        //
    }


    public function destroy(Student $student)
    {
        //
    }
}
