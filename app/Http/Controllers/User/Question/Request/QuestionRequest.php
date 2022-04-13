<?php

namespace App\Http\Controllers\User\Question\Request;

use App\Models\Question\Question;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class QuestionRequest extends FormRequest
{
    const TYPE = Question::TYPE;
    const CONTENTS = Question::CONTENTS;
    const TITLE = Question::TITLE;

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
            self::TYPE => ['required', 'integer'],
            self::CONTENTS => ['required', 'string'],
            self::TITLE => ['required', 'string'],
        ];
    }

    public function attributes(): array
    {
        return [
            self::TYPE => 'タイプ',
            self::CONTENTS => '質問内容',
        ];
    }

    public function messages()
    {
        return [
            self::TYPE.'.integer' => '質問の種類を選択してください',
            self::TITLE.'.required' => 'タイトルを記入してください',
            self::CONTENTS.'.required' => '質問内容を記入してください',
        ];
    }

    public function getType(): int
    {
        return (int) $this->get(self::TYPE);
    }

    public function getTitle()
    {
        return (string) $this->get(self::TITLE);
    }

    public function getContents(): string
    {
        return (string) $this->get(self::CONTENTS);
    }
}

