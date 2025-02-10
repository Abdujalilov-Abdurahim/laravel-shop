<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"=> "required|max:255",
            "short_description"=> "required",
            "price"=> "required",
            "image" => "nullable|image|max:2048",
        ];
    }

    public function messages(): array
{
    return [
        'name.required' => 'Mahsulot nomini kiritish majburiy',
        'short_description.required' => 'Mahsulot qisqacha tavsifini kiritish majburiy',
        'price.required' => 'Mahsulot narxini kiritish majburiy',
        'image'=> 'Rasm 2mb dan kichik bo\'lishi kerak',
    ];
}
}
