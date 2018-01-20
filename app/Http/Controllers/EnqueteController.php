<?php

namespace App\Http\Controllers;

use DB;

class EnqueteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function getAll()
    {
        $response = DB::table('enquetes')->get();
        $enquete['enquete'] = $response;
        return response()->json($enquete);
    }

    //
}
