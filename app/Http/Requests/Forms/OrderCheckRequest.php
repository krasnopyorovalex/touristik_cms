<?php

namespace App\Http\Requests\Forms;

use App\Http\Requests\Request;
use App\Rules\NotUrl;

/**
 * Class OrderCheckRequest
 * @package App\Http\Requests\Forms
 */
class OrderCheckRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', new NotUrl(), 'regex:/[А-Яа-яЁё]/u'],
            'phone' => 'required|string|min:5',
            'email' => 'email|nullable',
            'service' => 'string|nullable',
            'info' => ['string', 'nullable', new NotUrl()]
        ];
    }
}