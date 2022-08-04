<?php

namespace App\Http\Requests;


use App\Http\Requests\Api\FormRequest;

class VisitorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        // TODO: for better validation we can add list of countries to validate them
        return [
            'code' => ['required', 'max:2', 'min:2'],
        ];
    }
}
