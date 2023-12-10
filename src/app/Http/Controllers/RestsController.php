<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rest;

class RestsController extends Controller
{
    public function index()
    {
        $rests = Rest::get();
        return $rests;
    }

    public function show(Request $request, $id)
    {
        $rest = Rest::findOrFail($id);
        return $rest;
    }

    public function store(Request $request)
    {
        \Log::debug($request);
        return $request;
    }
}
