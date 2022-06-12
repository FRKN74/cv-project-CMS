<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HCreateRequest extends FormRequest
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
            'hizmetTitle' => 'required|min:3',
            'hizmetIcon' => 'required|min:3',
            'metin' => 'required:min:10'
        ];
    }
    public function attributes()
    {
        return [
            'hizmetTitle' => 'Hizmet Başlık',
            'hizmetIcon' => 'İcon Kod',
            'metin' => 'Metin'
        ];
    }
}
