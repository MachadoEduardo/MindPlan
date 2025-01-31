<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePatientRequest extends FormRequest
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
            'des_regis' => [
                'required',
                'string',
                'min:11',
                'max:11',
                Rule::unique('patients', 'id')->ignore($this->user, 'id')
            ],
            'first_name' => [
                'required',
                'string',
                'min:3',
                'max:255'
            ],
            'last_name' => [
                'required',
                'string',
                'min:3',
                'max:255'
            ],
            'gender' => [
                'string',
                'min:3',
                'max:50'
            ],
            'nacionality' => [
                'string',
                'min:3',
                'max:255'
            ],
            'blood_type' => [
                'required',
                'string',
                'min:1',
                'max:6'
            ],
            'birthdate' => [
                'required',
                'date',
                'min:3',
                'max:255'
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('patients', 'id')->ignore($this->user, 'id')  
            ],
            'password' => [
                'required',
                'min:6',
                'max:14'
            ]
        ];
    }
}
