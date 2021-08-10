<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProviderRequest extends FormRequest
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
        return request()->isMethod('post') ? $this->store() : $this->update();
    }
    private function store()
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255'
            ],
            'user_name' => [
                'required',
                'string',
                'max:255',
                'unique:providers,user_name'
            ],
            'email' => [
                'required',
                'email',
                'string',
                'max:255',
                'unique:providers,email'
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
            ],
        ];
    }
    private function update()
    {
        return [
            'name' => [
                'required',
                'string',
                'max:255'
            ],
            'user_name' => [
                'required',
                'string',
                'max:255',
                'unique:providers,user_name,' . $this->provider->id
            ],
            'email' => [
                'required',
                'email',
                'string',
                'max:255',
                'unique:providers,email,' . $this->provider->id
            ],
            'password' => [
                'required',
                'string',
                'min:8',
                'confirmed',
            ],
        ];
    }
}
