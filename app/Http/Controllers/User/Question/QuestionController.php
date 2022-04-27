<?php

namespace App\Http\Controllers\User\Question;

use App\Http\Controllers\Controller;
use App\Http\Controllers\User\Question\Request\AnswerRequest;
use App\Http\Controllers\User\Question\Request\QuestionRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * @var QuestionService
     */
    private $service;

    public function __construct(QuestionService $questionService)
    {
        $this->service = $questionService;
    }

    public function create(QuestionRequest $request): RedirectResponse
    {
        $user = Auth::guard('user')->user();
        $this->service->create($user, $request);

        return redirect(route('user.question.complete'));
    }

    public function answer(AnswerRequest $request): RedirectResponse
    {
        $user = Auth::guard('user')->user();
        $question_id = $request->getQuestionId();
        $this->service->answer($user, $request);

        return redirect(route('questions.detail', ['id' => $question_id]));
    }
}
