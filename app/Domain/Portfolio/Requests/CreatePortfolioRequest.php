<?php

namespace Domain\Portfolio\Requests;

use App\Http\Requests\Request;

/**
 * Class CreatePortfolioRequest
 * @package Domain\Portfolio\Requests
 */
class CreatePortfolioRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'bail|required|max:512',
            'title' => 'required|max:512',
            'description' => 'max:512',
            'preview' => 'required|string',
            'text' => 'required|string',
            'alias' => 'required|max:64|unique:portfolios',
            'image' => 'image',
            'pos' => 'integer|min:0|max:255'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages(): array
    {
        return [
            'name.required' => 'Поле «Название» обязательно для заполнения',
            'title.required'  => 'Поле «Title» обязательно для заполнения',
            'text.required'  => 'Поле «Текст» обязательно для заполнения',
            'alias.required'  => 'Поле «Alias» обязательно для заполнения',
            'alias.unique'  => 'Значение поля «Alias» уже присутствует в базе данных',
        ];
    }
}