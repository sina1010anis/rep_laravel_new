<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Database\Factories\CarFactory;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index()
    {

        Car::query()->get()->dd();

    }

}
