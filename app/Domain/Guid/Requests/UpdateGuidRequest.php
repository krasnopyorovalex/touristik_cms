<?php

namespace Domain\Guid\Requests;

use App\Http\Requests\Request;

/**
 * Class UpdateGuidRequest
 * @package Domain\Guid\Requests
 */
class UpdateGuidRequest extends Request
{
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:512',
            'description' => 'required|string|max:512',
            'name' => 'bail|required|max:512',
            'post' => 'required|max:512',
            'pos' => 'integer|min:0|max:255',
            'text' => 'required|string'
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
            'text.required'  => 'Поле «Описание» обязательно для заполнения',
        ];
    }
}