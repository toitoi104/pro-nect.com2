<?php

namespace App\Models\User;

use App\Models\BaseRepository;
use Illuminate\Pagination\LengthAwarePaginator;

/**
 *
 */
class UserRepository extends BaseRepository
{
    /**
     * @var User
     */
    protected $model;

    public function __construct(User $model)
    {
        $this->model = $model;
    }

    public function findByEmail(): User
    {
        $model = $this->model::query()->where(User::EMAIL)->fisrt();

        /** @var User $model */
        $model = $this->buildEmpty($model);

        return $model;
    }

    public function add(User $model): void
    {
        $this->addModel($model);
    }

    public function update(User $model): void
    {
        $this->updateModel($model);
    }

    public function delete(User $model): void
    {
        $this->deleteModel($model);
    }

    public function save(User $model): void
    {
        $this->saveModel($model);
    }
}
