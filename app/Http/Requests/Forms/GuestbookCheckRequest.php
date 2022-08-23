<?php

namespace App\Http\Requests\Forms;

use App\Http\Requests\Request;
use App\Rules\NotUrl;

/**
 * Class GuestbookCheckRequest
 * @package App\Http\Requests\Forms
 */
class GuestbookCheckRequest extends Request
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', new NotUrl(), 'regex:/[А-Яа-яЁё]/u'],
            'email' => 'email|nullable',
            'text' => ['required', 'string', new NotUrl()]
        ];
    }
}
