<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required|email',
            'age'=>'required|alpha_num|min:15',
            'city'=>'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'User Name is required',
            'email.required'=>'User Email is required',
            'age.required'=>'User Age is required',
            'city.required'=>'User City is required',
        ];
    }

    public function attributes()
    {
        return [
            'name'=>'User Name',
            'email'=>'User Email',
            'age'=>'User Age',
            'city'=>'User City'
        ];
    }

    protected function prepareForValidation():void
    {
        $this->merge([
            'name'=>strtoupper($this->name)
        ]);
    }

    protected $stopOnFirstFaliure = true;
}
