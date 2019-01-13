<?php

namespace App\Http\Controllers;

use App\Http\Requests\Forms\OrderCheckRequest;
use App\Mail\OrderSent;
use Illuminate\Support\Facades\Mail;

class FormHandlerController extends Controller
{
    /**
     * @param OrderCheckRequest $request
     * @return array
     */
    public function orderCheck(OrderCheckRequest $request): array
    {
        Mail::to(['info@krasber.ru'])->send(new OrderSent($request->all()));

        return [
            'message' => 'Благодарим за Вашу заявку. Наш менеджер свяжется с Вами в ближайшее время',
            'status' => 200
        ];
    }
}
