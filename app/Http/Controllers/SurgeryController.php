<?php

namespace eHOSP\Http\Controllers;

use Illuminate\Http\Request;

use eHOSP\Http\Requests;

class SurgeryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('services.', [
            'title' => 'eHOSP - Surgery'
        ]);
    }

    public function custom_surgery()
    {
        return view('services.surgery-printing.custom-surgery', [
            'title' => 'eHOSP - Custom Surgery'
        ]);
    }
}