<?php

namespace App\Http\Requests;

class CreateProductMealRequest extends ApiRequestRequest
{
    public function rules(): array
    {
        return [
            'product_id' => ['required', 'int'],
            'amount' => ['required', 'int'],
        ];
    }
}
