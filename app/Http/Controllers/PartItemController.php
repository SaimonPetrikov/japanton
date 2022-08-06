<?php

namespace App\Http\Controllers;

use App\Models\PartItem;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class PartItemController extends Controller
{
    public function index(): JsonResponse
    {
        $partItem = PartItem::all();

        return response()->json([
            'massage' => 'Part items list',
            'partItem' => $partItem
        ]);
    }

    public function show($id): JsonResponse
    {
        $partItem = PartItem::find($id);

        if (isset($partItem)) {
            return response()->json([
                'message' => 'Part item successfully found',
                'partItem' => $partItem
            ], 201);
        }

        $error = 'no such part item';

        return response()->json([
            'massage' => 'Part item is not isset',
            'partItem' => $error
        ]);
    }

    public function create(Request $request): JsonResponse
    {
        $partItem = PartItem::create($request->all());

        return response()->json([
            'message' => 'Part item successfully add',
            'partItem' => $partItem
        ]);
    }

    public function update(Request $request, $id): JsonResponse
    {
        $partItem = PartItem::find($id);

        if (!empty($partItem)) {
            $partItem = $partItem->update($request->all());
        } else {
            $error = 'no such part item';
        }

        if (isset($error)) {
            return response()->json([
                'message' => $error,
                'partItem' => $partItem
            ], 404);
        }

        return response()->json([
            'message' => 'part successfully update',
            'partItem' => $partItem
        ], 201);
    }

    public function delete($id): JsonResponse
    {
        $partItem = PartItem::find($id);
        if (isset($partItem)) {
            $partItem = $partItem->delete();
            return response()->json([
                'message' => 'part delete',
                'partItem' => $partItem
            ], 201);
        } else {
            $error = 'no such part item';
        }
        return response()->json([
            'message' => $error,
            'partItem' => $partItem
        ], 404);
    }
}
