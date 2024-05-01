<?php

namespace App\Http\Controllers\Api;

use App\Models\UserModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {

        // Set validation rules
        $validator = Validator::make($request->all(), [
            'username' => 'required', // ensure usernames are unique in the 'users' table
            'nama' => 'required',
            'password' => 'required|min:5|confirmed', // password must have a confirmation field
            'level_id' => 'required' // ensure the level_id exists in the 'levels' table
        ]);

        // If validations fail
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Create user
        $user = UserModel::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => bcrypt($request->password), 
            'level_id' => $request->level_id,
        ]);

        // Return response JSON if user is created
        if ($user) {
            return response()->json([
                'success' => true,
                'user' => $user
            ], 201);
        }

        // Return JSON process if insert failed
        return response()->json([
            'success' => false,
        ], 409);

    }
}

