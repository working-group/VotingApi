<?php

namespace App\Http\Controllers;

use App\Domain\Services\AnswerReader;
use Symfony\Component\HttpFoundation\Response;

class AnswerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function getByEnqueteId(int $enqueteId, AnswerReader $reader) : Response
    {
        return response()->json(
            $reader->readByEnqueteId(),
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }

    //
}
