<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            // 'email' => ['sometimes','required', 'string', 'lowercase', 'email', 'max:255',
            // Rule::unique(User::class)->ignore($this->user()->id)],
            'phone_number'=> ['required', 'string',  'min:14', 'starts_with:+234', 'max:14'],
            'dob' => ['required', 'date', 'before_or_equal:'. now()->subYears(14)->format('Y-m-d')]
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'phone_number.starts_with' => 'Phone number must start with +234',
            'phone_number.min' => 'Kindly enter a valid phone number!',
        ];
    }
}
