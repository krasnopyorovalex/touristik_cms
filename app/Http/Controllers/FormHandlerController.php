<?php

namespace App\Http\Controllers;

use App\Http\Requests\Forms\OrderConsultationRequest;
use App\Http\Requests\Forms\OrderServiceRequest;
use App\Mail\OrderConsultationSent;
use App\Mail\OrderServiceSent;
use Illuminate\Support\Facades\Mail;

class FormHandlerController extends Controller
{
    /**
     * @param OrderServiceRequest $request
     * @return array
     */
    public function orderService(OrderServiceRequest $request): array
    {
        Mail::to(['info@krasber.ru'])->send(new OrderServiceSent($request->all()));

        return [
            'message' => 'Благодарим за вашу заявку. Наш менеджер свяжется с вами в ближайшее время',
            'status' => 200
        ];
    }

    /**
     * @param OrderConsultationRequest $request
     * @return array
     */
    public function orderConsultation(OrderConsultationRequest $request): array
    {
        Mail::to(['info@krasber.ru'])->send(new OrderConsultationSent($request->all()));

        return [
            'message' => 'Благодарим за вашу заявку. Наш менеджер свяжется с вами в ближайшее время',
            'status' => 200
        ];
    }
}
