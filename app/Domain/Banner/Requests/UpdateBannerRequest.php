<?php

namespace Domain\Banner\Requests;

use App\Http\Requests\Request;


/**
 * Class UpdateBannerRequest
 * @package Domain\Banner\Requests
 */
class UpdateBannerRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'bail|required|string|max:255',
            'text' => 'required|string',
            'link' => 'required|string|max:127',
            'btn_text' => 'required|string|max:64',
            'image' => 'image',
            'imageAlt' => 'string|max:255',
            'imageTitle' => 'string|max:255'
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
            'link.required' => 'Поле «Ссылка» обязательно для заполнения',
            'btn_text.required' => 'Поле «Текст кнопки» обязательно для заполнения',
        ];
    }
}