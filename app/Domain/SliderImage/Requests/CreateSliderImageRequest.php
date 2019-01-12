<?php

namespace Domain\SliderImage\Requests;

use App\Http\Requests\Request;

/**
 * Class CreateSliderImageRequest
 * @package Domain\SliderImage\Requests
 */
class CreateSliderImageRequest extends Request
{
    public function rules()
    {
        return [
            'upload' => 'image',
            'sliderId' => 'integer'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'upload.image' => 'Разрешено загружать только изображения',
            'galleryId.integer' => 'Поле «id галереи» должно быть целым числом'
        ];
    }
}