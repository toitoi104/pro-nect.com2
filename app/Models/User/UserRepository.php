<?php

namespace App\Models\User;

use App\Models\BaseRepository;

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

    public function findByEmail(string $email): User
    {
        $model = $this->model::query()->where(User::EMAIL, $email)->first();

        /** @var User $model */
        $model = $this->buildEmpty($model);

        return $model;
    }

    public function findByName(string $name): User
    {
        $model = $this->model::query()->where(User::NAME, $name)->first();

        /** @var User $model */
        $model = $this->buildEmpty($model);

        return $model;
    }

    public function countUsers(): int
    {
        return $this->model::query()->count();
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
