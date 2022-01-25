<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function contact(Request $request) {
        $data = $request->all();
        var_dump($data);
    }
}
