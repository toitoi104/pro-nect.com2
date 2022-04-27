<?php

namespace App\Http\Controllers\Questions;

use App\Models\Answer\AnswerRepository;
use App\Models\Question\Question;
use App\Models\Question\QuestionRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

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

    public function find(int $id): Question
    {
        return $this->questionRepository->find($id);
    }

    public function searchQuestions(): LengthAwarePaginator
    {
        $questions = $this->questionRepository->findByPublic(true);

        return $questions;
    }

    public function getAnswers(int $question_id): Collection
    {
        return $this->answerRepository->findByQuestionId($question_id);
    }
}
