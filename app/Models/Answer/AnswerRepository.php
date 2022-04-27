<?php

namespace App\Models\Answer;

use App\Models\BaseRepository;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 *
 */
class AnswerRepository extends BaseRepository
{
    /**
     * @var Answer
     */
    protected $model;

    public function __construct(Answer $model)
    {
        $this->model = $model;
    }

    public function find(int $id): Answer
    {
        $model = $this->model->query()->where(Answer::ID, $id)->first();

        return $this->buildEmpty($model);
    }

    public function findByQuestionId(int $question_id): Collection
    {
        return $this->model->query()
            ->join(User::TABLE, Answer::dot(Answer::USER_ID), User::dot(User::ID))
            ->where(Answer::QUESTION_ID, $question_id)
            ->get();
    }

    public function add(Answer $model): void
    {
        $this->addModel($model);
    }

    public function update(Answer $model): void
    {
        $this->updateModel($model);
    }

    public function delete(Answer $model): void
    {
        $this->deleteModel($model);
    }

    public function save(Answer $model): void
    {
        $this->saveModel($model);
    }
}
