<?php

namespace App\Models\Question;

use App\Models\BaseRepository;
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

    public function findByStatus(int $status): Collection
    {
        return $this->model->query()->where(Question::STATUS, $status)->get();
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
