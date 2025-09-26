<?php

namespace App\Http\Requests;

class CreateShopCategoryRequest extends ApiRequestRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'order' => ['required', 'int'],
        ];
    }
}
