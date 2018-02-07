<?php

namespace App\Http\Controllers;

use App\Domain\Services\AnswerReader;
use App\Domain\Services\AnswerWriter;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Http\Request;

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

    public function getByEnqueteId(AnswerReader $reader, int $enqueteId) : Response
    {
        return response()->json(
            $reader->readByEnqueteId($enqueteId),
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }
    
    public function answer(AnswerWriter $writer, Request $request, int $enqueteId) : Response
    {
        $requestsParam = $request->all();
        $answerParam   = [
            'itemId'    => $requestsParam['item_id'],
            'enqueteId' => $enqueteId,
            'comment'   => $requestsParam['comment'],
            'commentBy' => $requestsParam['comment_by'],
        ];
        
        return response()->json(
            $writer->write($answerParam),
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }
}
