<?php

namespace App\Http\Controllers;

use App\Domain\Services\EnqueteReader;
use Symfony\Component\HttpFoundation\Response;

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

    public function getAll(EnqueteReader $reader) : Response
    {
        return response()->json($reader->readAll(), 200, [], JSON_UNESCAPED_UNICODE );
    }

    public function getEnqueteDetail(EnqueteReader $reader, int $enqueteId) : Response
    {
        dd($reader->readByEnqueteId($enqueteId));
        //return response()->json($reader->readByEnqueteId($enqueteId), 200, [], JSON_UNESCAPED_UNICODE );
    }
    
    //
}
