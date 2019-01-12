<?php

namespace Domain\Tab\Requests;

use App\Http\Requests\Request;
use Illuminate\Validation\Rule;

/**
 * Class UpdateTabRequest
 * @package Domain\Tab\Requests
 */
class UpdateTabRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => 'bail|required|max:255'
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
            'name.required' => 'Поле «Название» обязательно для заполнения'
        ];
    }
}