<?php

namespace App\Http\Controllers\Questions;

use App\Http\Controllers\Controller;
use App\Models\Question\QuestionRepository;
use Illuminate\View\View;

class QuestionsController extends Controller
{

    /**
     * @var QuestionService $questionService
     */
    private $questionService;

    public function __construct(
        QuestionService $questionService
    ){
        $this->questionService = $questionService;
    }

    public function index(): View
    {
        $questions = $this->questionService->searchQuestions();

        return view('questions.index', compact('questions'));
    }

    public function detail(int $id): View
    {
        $question = $this->questionService->find($id);

        if(!$question->exists || !$question->isPublic()){
            abort(404);
        }

        $answers = $this->questionService->getAnswers($id);

        return view('questions.detail', compact('question', 'answers'));
    }
}
