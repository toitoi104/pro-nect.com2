<?php

namespace App\Http\Controllers\User\Question;

use App\Http\Controllers\User\Question\Request\AnswerRequest;
use App\Http\Controllers\User\Question\Request\QuestionRequest;
use App\Models\Answer\Answer;
use App\Models\Answer\AnswerRepository;
use App\Models\Question\Question;
use App\Models\Question\QuestionRepository;
use App\Models\User\User;

class QuestionService
{
    /**
     * @var QuestionRepository
     */
    private $questionRepository;

    /**
     * @var AnswerRepository
     */
    private $answerRepository;

    public function __construct(
        QuestionRepository $questionRepository,
        AnswerRepository $answerRepository
    ){
        $this->questionRepository = $questionRepository;
        $this->answerRepository = $answerRepository;
    }

    public function create(User $user, QuestionRequest $request): void
    {
        $contents = $this->changeContents($request->getContents());

        $question = new Question();

        $question->setUserId($user->getId());
        $question->setContents($contents);
        $question->setType($request->getType());
        $question->setTitle($request->getTitle());
        $question->setPublic(true);
        $question->setSolved(false);

        $this->questionRepository->add($question);
    }

    public function answer(User $user, AnswerRequest $request): void
    {
        $contents = $this->changeContents($request->getContents());

        $answer = new Answer();

        $answer->setQuestionId($request->getQuestionId());
        $answer->setContents($contents);
        $answer->setUserId($user->getId());
        $answer->setIsBest(false);

        $this->answerRepository->add($answer);
    }

    private function changeContents(string $contents): string
    {
        $contents = preg_replace("/</", "&lt;", $contents);
        $contents = preg_replace('/\>/', '&gt;', $contents);

        return $contents;
    }
}
