<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules()
    {
        return [
            'post.name' => 'required|string|max:100',
            'post.address' => 'required|string|max:2000',
            'post.access' => 'required|string|max:2000',
            'post.body' => 'required|string|max:2000',
            'post.price' => 'nullable|integer|max:9999999',
            'post.sales' => 'nullable|string|max:2000',
            'post.hpurl' => 'nullable|string|max:2000',
        ];
    }
}