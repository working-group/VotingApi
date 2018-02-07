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

    public function getByEnqueteId(int $enqueteId, AnswerReader $reader) : Response
    {
        return response()->json(
            $reader->readByEnqueteId(),
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }
    
    public function answer(int $enqueteId, Request $request, AnswerWriter $writer) : Response
    {
        $answerParam = [
            'itemId'      => $request->get('item_id'),
            'enqueteId'   => $enqueteId,
            'comment'     => $request->get('comment'),
            'commentedBy' => $request->get('commented_by'),
        ];
        
        return respose()>json(
            $writer->write($answerParam),
            200,
            [],
            JSON_UNESCAPED_UNICODE
        );
    }
}
