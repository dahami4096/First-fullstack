<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyDataController extends Controller
{
    public function getData()
    {
        $data = [
            ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
            ['id' => 2, 'name' => 'Jane Doe', 'email' => 'jane@example.com']
        ];

        return response()->json($data);
    }
}
