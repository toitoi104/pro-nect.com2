<?php

namespace App\Http\Controllers\User\Question\Request;

use App\Models\Answer\Answer;
use App\Models\Question\Question;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class AnswerRequest extends FormRequest
{
    const QUESTION_ID = Answer::QUESTION_ID;
    const CONTENTS = Answer::CONTENTS;

    public function withValidator(Validator $validator): void
    {
        $validator->after(function ($validator): void {
            ///if () {
               // $validator->errors()->add('test', '自己紹介にURLやメールアドレスを入力することはできません');
            //}
        });
    }

    public function rules(): array
    {
        return [
            self::QUESTION_ID => ['required', 'int'],
            self::CONTENTS => ['required', 'string'],
        ];
    }

    public function attributes(): array
    {
        return [
            self::QUESTION_ID => '対象の質問',
            self::CONTENTS => '回答内容',
        ];
    }

    public function messages()
    {
        return [
            self::QUESTION_ID.'.required' => '対象の質問が存在しません',
            self::CONTENTS.'.required' => '回答内容を記入してください',
        ];
    }

    public function getQuestionId(): int
    {
        return (int) $this->get(self::QUESTION_ID);
    }

    public function getContents(): string
    {
        return (string) $this->get(self::CONTENTS);
    }
}

