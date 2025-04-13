<?php

namespace App\Http\Requests;

use App\Rules\Uppercase;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

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
            'name' => ['required', new Uppercase],
            'email' => 'required|email',
            'age' => 'required|numeric|between:18,27',
            'password' => 'required|alpha_num|min:6'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Name is required'
        ];
    }
    public function attributes()
    {
        return [
            'name' => 'Full Name',
        ];
    }
    // protected function prepareForValidation()
    // {
    //     $this->merge([
    //         // 'name' => strtoupper($this->name),
    //         'name' => Str::slug($this->name)
    //     ]);
    // }
    // protected $stopOnFirstFailure = true;
}
