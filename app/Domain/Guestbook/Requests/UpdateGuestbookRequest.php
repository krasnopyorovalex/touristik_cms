<?php

namespace Domain\Guestbook\Requests;

use App\Http\Requests\Request;

/**
 * Class UpdateGuestbookRequest
 * @package Domain\Guestbook\Requests
 */
class UpdateGuestbookRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'bail|required|max:512',
            'text' => 'required|string',
            'city' => 'required|string|max:32',
            'image' => 'image',
            'published_at' => 'date'
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
            'text.required' => 'Поле «Текст» обязательно для заполнения',
            'city.required' => 'Поле «Город» обязательно для заполнения',
        ];
    }
}