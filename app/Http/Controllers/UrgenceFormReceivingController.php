<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class UrgenceFormReceivingController extends Controller
{
    //

    public function store(Request $request)
    {
        $data = $request->all();
        return $data;
    }

}
