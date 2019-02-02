<?php

namespace Domain\Schedule\Requests;

use App\Http\Requests\Request;

/**
 * Class UpdateScheduleRequest
 * @package Domain\Schedule\Requests
 */
class UpdateScheduleRequest extends Request
{
    public function rules(): array
    {
        return [
            'date_string' => 'string|max:255|nullable',
            'date' => 'required|date',
            'body' => 'required|string',
            'price' => 'string|max:255'
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
            'date.required' => 'Поле «Дата» обязательно для заполнения',
            'body.required'  => 'Поле «Описание тура» обязательно для заполнения',
            'price.required'  => 'Поле «Цена» обязательно для заполнения'
        ];
    }
}
