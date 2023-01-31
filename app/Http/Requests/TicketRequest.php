<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TicketRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "category_id" => 'required|exists:categories,id',
            "message" => 'required|min:2|string',
            "image" => 'nullable|image|mimes:png,jpg,jpeg|max:2065',
        ];
    }

    public function messages()
    {
        return [
            'category_id.required' => __('validation.required'),
            'category_id.exists' => __('validation.exists'),
            'message.required' => __('validation.exists'),
            'message.min' => __('validation.min'),
            'message.string' => __('validation.string'),
            'image.image' => __('validation.image'),
            'image.mimes' => __('validation.mimes'),
            'image.max' => __('validation.max'),
        ];
    }
}
