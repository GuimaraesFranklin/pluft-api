<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ClientsController extends Controller
{
    public function index() {

        $clients = Client::with('company')->get();
        return response()->json($clients);
    }

    public function show ($id) {

        $clients = Client::with('company')->find($id);

        if (!$clients) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        return response()->json($clients);

    }

    public function store(Request $request) {
        $clients = new Client();
        $clients->fill($request->all());
        $clients->save();

        return response()->json($clients, 201);
    }

    public function update(Request $request, $id) {

        $clients = Client::find($id);

        if(!$clients) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $clients->fill($clients->all());
        $clients->save();

        return response()->json($clients);

    }

    public function destroy() {

        $clients = Client::find($id);

        if(!$clients) {
            return response()->json([
                'message' => 'Record not found',
            ], 404);
        }

        $clients->delete();
    }
}
