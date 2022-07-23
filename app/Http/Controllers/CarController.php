<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;


class CarController extends Controller
{
    public function index(): JsonResponse
    {
        $car = Car::all();

        return response()->json([
            'message' => 'Car list',
            'car' => $car
        ], 201);
    }

    public function show($id): JsonResponse
    {
        $car = Car::find($id);

        if (isset($car)){
            return response()->json([
                'message' => 'car successfully found',
                'car' => $car
            ], 201);
        }else{
            return response()->json([
                'message' => 'car is not isset',
                'car' => $car
            ], 404);
        }
    }

    public function create(Request $request): JsonResponse
    {
        $car = Car::create($request->all());

        return response()->json([
            'message' => 'Car successfully add',
            'car' => $car
        ], 201);
    }

    public function update(Request $request, $id): JsonResponse
    {

        $car = Car::find($id);
        if (!empty($car)){
            $car = $car->update($request->all());
        }else{
            $error = 'no such car';
        }

        if (isset($error)){
            return response()->json([
                'message' => $error,
                'car' => $car
            ], 404);
        }else{
            return response()->json([
                'message' => 'car successfully update',
                'car' => $car
            ], 201);
        }
    }

    public function delete($id): JsonResponse
    {
        $car = Car::find($id)->delete();
        return response()->json([
            'message' => 'car delete',
            'car' => $car
        ], 201);
    }
}
