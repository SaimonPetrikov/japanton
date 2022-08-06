<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Provider;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index(): JsonResponse
    {
        $provider = Provider::all();

        return response()->json([
            'message' => 'provider list',
            'car' => $provider
        ], 201);
    }

    public function show($id): JsonResponse
    {
        $provider = Provider::find($id);

        if (isset($provider)) {
            return response()->json([
                'message' => 'provider successfully found',
                'car' => $provider
            ], 201);
        }
        return response()->json([
            'message' => 'provider is not isset',
            'car' => $provider
        ], 404);
    }

    public function create(Request $request): JsonResponse
    {
        $provider = Provider::create($request->all());

        return response()->json([
            'message' => 'provider successfully add',
            'car' => $provider
        ], 201);
    }

    public function update(Request $request, $id): JsonResponse
    {

        $provider = Provider::find($id);
        if (!empty($provider)) {
            $provider = $provider->update($request->all());
        } else {
            $error = 'no such car';
        }

        if (isset($error)) {
            return response()->json([
                'message' => $error,
                'car' => $provider
            ], 404);
        }
        return response()->json([
            'message' => 'provider successfully update',
            'car' => $provider
        ], 201);
    }

    public function delete($id): JsonResponse
    {
        $provider = Provider::find($id)->delete();
        return response()->json([
            'message' => 'provider delete',
            'car' => $provider
        ], 201);
    }
}
