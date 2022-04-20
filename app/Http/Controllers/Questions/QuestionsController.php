<?php

namespace App\Http\Controllers\Questions;

use App\Http\Controllers\Controller;
use App\Models\Question\QuestionRepository;
use Illuminate\View\View;

class QuestionsController extends Controller
{
    /**
     * @var QuestionRepository
     */
    private $questionRepository;

    public function __construct(QuestionRepository $questionRepository)
    {
        $this->questionRepository = $questionRepository;
    }

    public function index(): View
    {
        $questions = $this->questionRepository->findByPublic(true);

        return view('questions.index', compact('questions'));
    }

    public function detail(int $id): View
    {
        $question = $this->questionRepository->find($id);

        if(!$question->exists || !$question->isPublic()){
            abort(404);
        }

        return view('questions.detail', compact('question'));
    }
}
