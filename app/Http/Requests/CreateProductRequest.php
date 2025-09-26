<?php

namespace App\Http\Requests;

class CreateProductRequest extends ApiRequestRequest
{

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'price' => ['required', 'int'],
        ];
    }
}
