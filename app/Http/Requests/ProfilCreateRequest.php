<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfilCreateRequest extends FormRequest
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
            'name' => 'min:3',
            'image' => 'required|mimes:png,jpg',
            'subtitle' => 'required|min:3',
            'facebook' => 'required',
            'twitter' => 'required',
            'linkedin' => 'required',



        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Ad Soyad',
            'image' => 'Resimn',
            'subtitle' => 'Alt başlık',
            'facebook' => 'facebook',
            'twitter' => 'twitter',
            'linkedin' => 'linkedin',



        ];
    }
}
