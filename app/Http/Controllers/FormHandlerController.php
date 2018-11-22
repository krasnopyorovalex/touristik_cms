<?php

namespace App\Http\Controllers;

use App\Mail\OrderServiceSent;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class FormHandlerController extends Controller
{
    /**
     * @param Request $request
     * @return array
     */
    public function orderService(Request $request): array
    {
        Mail::to(['info@krasber.ru'])->send(new OrderServiceSent($request->all()));

        return [
            'message' => 'Благодарим за вашу заявку. Наш менеджер свяжется с вами в ближайшее время',
            'status' => 200
        ];
    }
}
