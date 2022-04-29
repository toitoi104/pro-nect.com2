<?php

namespace App\Models\Question;

use App\Models\Answer\Answer;
use App\Models\BaseRepository;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;

/**
 *
 */
class QuestionRepository extends BaseRepository
{
    /**
     * @var Question
     */
    protected $model;

    public function __construct(Question $model)
    {
        $this->model = $model;
    }

    public function find(int $id): Question
    {
        $model = $this->model->query()
            ->select([
                Question::dot('*'),
                User::dot(User::NAME)
            ])
            ->leftJoin(User::TABLE, Question::dot(Question::USER_ID), User::dot(User::ID))
            ->where(Question::dot(Question::ID), $id)->first();

        return $this->buildEmpty($model);
    }

    public function search(): LengthAwarePaginator
    {
        $subQuery = DB::table(Answer::TABLE)->select(DB::raw('question_id , COUNT(*) as count'))
            ->groupBy(Answer::QUESTION_ID);

        $models = $this->model->query()
            ->select([
                Question::dot(Question::ID),
                Question::dot(Question::TITLE),
                Question::dot(Question::USER_ID),
                Question::dot(Question::CREATED_AT),
                DB::raw('sub.count'),
            ])
            ->leftJoin(User::TABLE, Question::dot(Question::USER_ID), User::dot(User::ID))
            ->leftJoinSub($subQuery, 'sub', Question::dot(Question::ID), '=', 'sub.question_id')
            ->where(Question::PUBLIC, true)
            ->orderByDesc(Question::ID)
            ->paginate(20);

        return $models;
    }

    public function countQuestions(): int
    {
        return $this->model::query()->count();
    }

    public function add(Question $model): void
    {
        $this->addModel($model);
    }

    public function update(Question $model): void
    {
        $this->updateModel($model);
    }

    public function delete(Question $model): void
    {
        $this->deleteModel($model);
    }

    public function save(Question $model): void
    {
        $this->saveModel($model);
    }
}
