<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Attendance;
use App\Models\Rest;

class AttendancesController extends Controller
{
    public function index()
    {
        $attendances = Attendance::get();
        return $attendances;
    }

    public function list(Request $request, $date)
    {
        $attendance = Attendance::where('date', $date)->oderBy('start_time', 'asc')->paginate(5);
        return $attendance;
    }

    public function store(Request $request)
    {
        \Log::debug($request);
        return $request;
    }
}
