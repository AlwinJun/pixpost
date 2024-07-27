<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreJobRequest extends FormRequest
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
            'title' => ["required", "string", "max:254"],
            'salary' => ["required", "string", "max:254"],
            'location' => ["required", "string", "max:254"],
            'schedule' => ["required", "string", "max:254", Rule::in(['Part Time', 'Full Time'])],
            'url' => ["required", "string", "max:254", "active_url"],
            'tags' => ["nullable"],
        ];
    }
}