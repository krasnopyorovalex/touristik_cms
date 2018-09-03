<?php

namespace Domain\SeoBlock\Requests;

use App\Http\Requests\Request;

/**
 * Class CreateSeoBlockRequest
 * @package Domain\SeoBlock\Requests
 */
class CreateSeoBlockRequest extends Request
{
    public function rules(): array
    {
        return [
            'sys_name' => 'bail|required|max:32',
            'value' => 'required|string',
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
            'sys_name.required' => 'Поле «Название» обязательно для заполнения',
            'value.required' => 'Поле «Значение» обязательно для заполнения',
        ];
    }
}