<?php

namespace App\Http\Controllers\Welcome;

use App\Http\Controllers\Controller;
use App\Models\Answer\Answer;
use App\Models\Answer\AnswerRepository;
use App\Models\Question\QuestionRepository;
use App\Models\User\UserRepository;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * @var QuestionRepository
     */
    private $questionRepository;

    /**
     * @var AnswerRepository
     */
    private $answerRepository;

    public function __construct(
        UserRepository $userRepository,
        QuestionRepository $questionRepository,
        AnswerRepository $answerRepository
    ){
        $this->userRepository = $userRepository;
        $this->questionRepository = $questionRepository;
        $this->answerRepository = $answerRepository;
    }

    public function index(): View
    {
        $userCount = $this->userRepository->countUsers();
        $questionCount = $this->questionRepository->countQuestions();
        $answerCount = $this->answerRepository->countAnswers();

        return view('welcome', compact('userCount', 'questionCount', 'answerCount'));
    }

}
