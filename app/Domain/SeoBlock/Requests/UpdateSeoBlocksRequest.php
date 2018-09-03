<?php

namespace Domain\SeoBlock\Requests;

use App\Http\Requests\Request;
use Illuminate\Validation\Rule;

/**
 * Class UpdateSeoBlocksRequest
 * @package Domain\SeoBlock\Requests
 */
class UpdateSeoBlocksRequest extends Request
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