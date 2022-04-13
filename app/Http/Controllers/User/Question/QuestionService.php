<?php

namespace App\Http\Controllers\User\Question;

use App\Http\Controllers\User\Question\Request\QuestionRequest;
use App\Models\Question\Enum\Status;
use App\Models\Question\Question;
use App\Models\Question\QuestionRepository;
use App\Models\User\User;

class QuestionService
{
    /**
     * @var QuestionRepository
     */
    private $questionRepository;

    public function __construct(
        QuestionRepository $questionRepository
    ){
        $this->questionRepository = $questionRepository;
    }

    public function create(User $user, QuestionRequest $request): void
    {
        $question = new Question();

        $question->setUserId($user->getId());
        $question->setContents($request->getContents());
        $question->setType($request->getType());
        $question->setTitle($request->getTitle());
        $question->setStatus(Status::PUBLIC);

        $this->questionRepository->add($question);
    }
}
