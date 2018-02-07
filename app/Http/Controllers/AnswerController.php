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
        $answerParam   = [
            'itemId'    => $request->input('item_id'),
            'enqueteId' => $enqueteId,
            'comment'   => $request->input('comment'),
            'commentBy' => $request->input('comment_by'),
        ];
        
        return response()->json(
            $writer->write($answerParam),
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }
}
