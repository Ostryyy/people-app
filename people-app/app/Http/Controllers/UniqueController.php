<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;

class UniqueController extends Controller
{
    public function index()
    {
        $people = People::all();

        return response()->json($people);
    }

    public function create(Request $request)
    {
        $person = new People;

        $person->first_name = $request->input('first_name');
        $person->last_name = $request->input('last_name');
        $person->phone_number = $request->input('phone_number');
        $person->street = $request->input('street');
        $person->city = $request->input('city');
        $person->country = $request->input('country');

        $person->save();

        return response()->json($person, 200);
    }


    public function show($id)
    {
        $person = People::findOrFail($id);

        return response()->json($person, 200);
    }

    public function update(Request $request, $id)
    {
        $person = People::findOrFail($id);

        $person->first_name = $request->input('first_name');
        $person->last_name = $request->input('last_name');
        $person->phone_number = $request->input('phone_number');
        $person->street = $request->input('street');
        $person->city = $request->input('city');
        $person->country = $request->input('country');

        $person->save();

        return response()->json($person, 200);
    }


    public function destroy($id)
    {
        $person = People::findOrFail($id);

        $person->delete();

        return response()->json('Deleted', 200);
    }

}