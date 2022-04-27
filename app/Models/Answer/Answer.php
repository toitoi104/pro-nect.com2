<?php

namespace App\Models\Answer;

use App\Models\BaseEloquent;
use App\Models\User\User;

/**
 * Class Answer
 * @package App\Models\Answer
 *
 * @property int $id
 * @property int $question_id
 * @property int $user_id
 * @property string $contents
 * @property bool $is_best
 */
class Answer extends BaseEloquent
{
    const TABLE = 'answer';

    protected $table = self::TABLE;

    public $timestamps = true;

    const ID = 'id';
    const QUESTION_ID = 'question_id';
    const USER_ID = 'user_id';
    const CONTENTS = 'contents';
    const IS_BEST = 'is_best';

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getQuestionId(): int
    {
        return $this->question_id;
    }

    /**
     * @param int $question_id
     */
    public function setQuestionId(int $question_id): void
    {
        $this->question_id = $question_id;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->user_id;
    }

    /**
     * @param int $user_id
     */
    public function setUserId(int $user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return string
     */
    public function getContents(): string
    {
        return $this->contents;
    }

    /**
     * @param string $contents
     */
    public function setContents(string $contents): void
    {
        $this->contents = $contents;
    }

    /**
     * @return bool
     */
    public function isIsBest(): bool
    {
        return $this->is_best;
    }

    /**
     * @param bool $is_best
     */
    public function setIsBest(bool $is_best): void
    {
        $this->is_best = $is_best;
    }

    public function getContentsRows(): array
    {
        $vs = preg_replace("/^\n/", ' \n', $this->contents);

        return explode("\n", $vs);
    }

}
