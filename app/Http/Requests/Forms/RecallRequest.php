<?php

namespace App\Http\Requests\Forms;

use App\Http\Requests\Request;
use App\Rules\NotUrl;

/**
 * Class RecallRequest
 * @package App\Http\Requests\Forms
 */
class RecallRequest extends Request
{
    public function rules(): array
    {
        return [
            'name__recall' => ['required', 'string', 'min:3', new NotUrl(), 'regex:/[А-Яа-яЁё]/u'],
            'phone__recall' => 'required|string|min:5'
        ];
    }
}