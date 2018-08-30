<?php

namespace Domain\MenuItem\Requests;

use App\Http\Requests\Request;

/**
 * Class UpdateMenuItemRequest
 * @package Domain\Menu\Requests
 */
class UpdateMenuItemRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'bail|required|max:64',
            'link' => 'required|string',
            'menu_id' => 'numeric|exists:menus,id',
            'parent_id' => 'numeric|exists:menu_items,id|nullable',
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
            'link.required'  => 'Поле «Ссылка» обязательно для заполнения'
        ];
    }
}