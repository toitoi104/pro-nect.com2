<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Exception;

/**
 *
 */
abstract class BaseRepository{
    use DaoTrait;

    /**
     * @var Model
     */
    protected $model;

    /**
     * Add.
     * @throws \Exception
     */
    protected function addModel(Model $model): bool
    {
        return $model->save();
    }

    /**
     * Update.
     * @throws \Exception
     */
    protected function updateModel(Model $model, bool $touch=true): bool
    {
        $key = $model->getKeyName();

        if (!isset($model->{$key})){
            throw new Exception('Primary key value is missing.');
        }

        $model->exists = true;

        if ($touch){
            $model->touch();
        }

        return $model->save();
    }

    /**
     * Save.
     * @throws Exception
     */
    protected function saveModel(Model $model): bool{
        if ($model->exists) {
            return $this->updateModel($model);
        }

        return $this->addModel($model);
    }

    /**
     * Delete.
     * @throws \Exception
     */
    protected function deleteModel(Model $model): bool
    {
        return $model->delete();
    }

    /**
     * @param Eloquent|Model|null $model
     *
     * @return mixed
     */
    protected function buildEmpty(?Model $model)
    {
        if (null === $model) {
            $model = $this->model->newModelInstance();
        }

        return $model;
    }
}
