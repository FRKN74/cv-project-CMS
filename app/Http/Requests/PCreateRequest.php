<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|unique:projes|min:3',
            'image1' => 'mimes:png,jpg',
            'image2' => 'mimes:png,jpg',
            'image3' => 'mimes:png,jpg',

            'description' => 'required',
        ];
    }
    public function attributes()
    {
        return [
            'title' => 'Başlık',
            'image1' => 'Resim1',
            'image2' => 'Resim2',
            'image3' => 'Resim3',
            'description' => 'Açıklama',
        ];
    }
}
