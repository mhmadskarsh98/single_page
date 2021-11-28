<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AppController extends Controller
{
    //
    public function index()
    {
        return view('layouts.app');
    }

    public function testApi()
    {

        $employees = Http::get('http://dummy.restapiexample.com/api/v1/employees');
        $employees = $employees->json();
        return view('home', compact('employees'));
    }
}
