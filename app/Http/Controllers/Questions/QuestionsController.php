<?php

namespace App\Http\Controllers\Questions;

use App\Http\Controllers\Controller;
use App\Models\Question\Enum\Status;
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
        $questions = $this->questionRepository->findByStatus(Status::PUBLIC);

        return view('questions.index', compact('questions'));
    }
}
