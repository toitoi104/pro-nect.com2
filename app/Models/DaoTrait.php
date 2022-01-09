<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 *
 */
trait DaoTrait
{
    /**
     * @var Model
     */
    protected $model;

    private $selectColumns = [];

    /**
     * Set select columns.
     * @param array $columns
     */
    protected function setColumns(array $columns): void {
        $this->selectColumns = $columns;
    }

    /**
     * Get query object.
     * @return Builder
     */
    protected function query(bool $isNew=false): Builder
    {
        if (!$isNew){
            $query = $this->model->select();
        }else{
            $query = $this->model->newQuery();
        }

        if (!empty($this->selectColumns)){
            $query->select($this->selectColumns);
        }

        return $query;
    }

    /**
     * Where.
     * @param $column
     * @param null $operator
     * @param null $value
     * @param string $boolean
     * @return Builder
     */
    protected function where($column, $operator=null, $value=null, string $boolean='and'): Builder
    {
        return $this->query()->where($column, $operator, $value, $boolean);
    }

    /**
     *
     */
    protected function whereIn($column, $values, string $boolean='and', $not = false): Builder
    {
        return $this->query()->whereIn($column, $values, $boolean, $not);
    }

    public function dateBegin(int $year, int $month, int $day): string
    {

        return $time = "{$year}-{$month}-{$day}";
    }

    public function dateEnd(int $year, int $month, int $day): string
    {
        return $time = "{$year}-{$month}-{$day}";
    }

    private function createOrder($column, bool $addCreated, bool $addUpdated): array
    {
        if (!$column) {
            $column = [];
        } else if (!is_array($column)) {
            $column = [$column];
        }

        if ($addCreated) {
            $column[] = 'created_at';
        }

        if ($addUpdated) {
            $column[] = 'updated_at';
        }

        return $column;
    }

    /**
     * Order by.
     * @param Builder $query
     * @param array|string $column
     * @param bool|false $addCreated
     * @param bool|false $addUpdated
     * @return Builder
     */
    final protected function orderBy(Builder $query, $column, bool $addCreated=false, bool $addUpdated=false): Builder
    {
        $column = $this->createOrder($column, $addCreated, $addUpdated);

        foreach ($column as $col) {
            $query = $query->orderBy($col);
        }

        return $query;
    }

    /**
     * Order by desc.
     * @param Builder $query
     * @param array|string $column
     * @param bool|false $addCreated
     * @param bool|false $addUpdated
     * @return Builder
     */
    final protected function orderByDesc(Builder $query, $column, bool $addCreated=false, bool $addUpdated=false): Builder
    {
        $column = $this->createOrder($column, $addCreated, $addUpdated);

        foreach ($column as $col) {
            $query = $query->orderByDesc($col);
        }

        return $query;
    }


    /**
     * Get limit offset.
     */
    final protected function getLimitOffset(int $page, int $size): int {
        $index = $page - 1;
        $index = ($index > 0)?$index:0;

        return $index * $size;
    }

    /**
     * Limit page.
     */
    final protected function limitPage(Builder $query, int $page, int $size): Builder{
        $offset = $this->getLimitOffset($page, $size);

        return $query->offset($offset)->limit($size);
    }
}
