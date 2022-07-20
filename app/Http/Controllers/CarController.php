<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class CarController extends Controller
{
    public function create(Request $request): JsonResponse
    {

        $car = Car::create($request->all());

        return response()->json([
            'message' => 'Car successfully add',
            'car' => $car
        ], 201);
    }
}
