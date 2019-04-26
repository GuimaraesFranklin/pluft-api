<?php

namespace App\Http\Controllers;

use App\Slots;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers;

class SlotsController extends Controller
{
    /*public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }*/

    public function index() {
        $slots = Slots::with('company')->get();
        return response()->json($slots);
    }

    public function show ($id) {

        $slot = Slots::with('company')->find($id);

        if (!$slot) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        return response()->json($slot);

    }

    public function store(Request $request) {
        $slot = new Slots();
        $slot->fill($request->all());
        $slot->save();

        return response()->json($slot, 201);
    }

    public function update(Request $request, $id) {

        $slot = Slots::find($id);

        if(!$slot) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $slot->fill($request->all());
        $slot->save();

        return response()->json($slot);

    }

    public function destroy() {

        $slot = Slots::find($id);

        if(!$slot) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $slot->delete();
    }
}
