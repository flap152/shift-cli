<?php

namespace Shift\Cli\Http\Controllers;

use Carbon\Carbon;

class SimpleController extends Controller
{
    public function index()
    {
        $now = Carbon::now();

        return view('welcome', compact('now'));
    }
}
