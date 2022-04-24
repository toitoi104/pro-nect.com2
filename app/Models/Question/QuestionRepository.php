<?php

namespace App\Models\Question;

use App\Models\BaseRepository;
use App\Models\User\User;
use Illuminate\Database\Eloquent\Collection;

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
        $model = $this->model->query()->where(Question::ID, $id)->first();

        return $this->buildEmpty($model);
    }

    public function findByPublic(bool $public): Collection
    {
        $models = $this->model->query()
            ->join(User::TABLE, Question::dot(Question::USER_ID), User::dot(User::ID))
            ->where(Question::PUBLIC, $public)
            ->get();

        return $models;
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
