<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PartController extends Controller
{
    public function index(): JsonResponse
    {
        $part = Part::all();

        return response()->json([
            'message' => 'Part list',
            'part' => $part
        ], 201);
    }

    public function show($id): JsonResponse
    {
        $part = Part::find($id);

        if (isset($part)) {
            return response()->json([
                'message' => 'part successfully found',
                'part' => $part
            ], 201);
        }
        return response()->json([
            'message' => 'part is not isset',
            'part' => $part
        ], 404);
    }

    public function create(Request $request): JsonResponse
    {
        $part = Part::create($request->all());

        return response()->json([
            'message' => 'part successfully add',
            'part' => $part
        ], 201);
    }

    public function update(Request $request, $id): JsonResponse
    {

        $part = Part::find($id);
        if (!empty($part)) {
            $part = $part->update($request->all());
        } else {
            $error = 'no such part';
        }

        if (isset($error)) {
            return response()->json([
                'message' => $error,
                'part' => $part
            ], 404);
        }
        return response()->json([
            'message' => 'part successfully update',
            'part' => $part
        ], 201);
    }

    public function delete($id): JsonResponse
    {
        $part = Part::find($id)->delete();
        return response()->json([
            'message' => 'part delete',
            'part' => $part
        ], 201);
    }
}
