<?php

namespace App\Models\Question;

use App\Models\BaseEloquent;

class Question extends BaseEloquent
{
    const TABLE = 'question';

    protected $table = self::TABLE;

    public $timestamps = true;

    const ID = 'id';
    const USER_ID = 'user_id';
    const TITLE = 'title';
    const CONTENTS = 'contents';
    const TYPE = 'type';
    const STATUS = 'status';
    const PUBLIC = 'public';
    const SOLVED = 'solved';

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
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
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
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     */
    public function setType(int $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getStatus(): int
    {
        return $this->status;
    }

    /**
     * @param int $status
     */
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    /**
     * @return bool
     */
    public function isPublic(): bool
    {
        return $this->public;
    }

    /**
     * @param bool $public
     */
    public function setPublic(bool $public): void
    {
        $this->public = $public;
    }

    private $solved=false;

    /**
     * @return bool
     */
    public function isSolved(): bool
    {
        return $this->solved;
    }

    /**
     * @param bool $solved
     */
    public function setSolved(bool $solved): void
    {
        $this->solved = $solved;
    }

    public function getCreatedAt(): string
    {
        return $this->created_at;
    }
}
