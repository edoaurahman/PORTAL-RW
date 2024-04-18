<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAkunPenduduk extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "nik" => "required|numeric",
            "email" => "required|email",
        ];
    }

    public function messages(): array
    {
        return [
            "nik.required" => "NIK tidak boleh kosong",
            "nik.numeric" => "NIK harus berupa angka",
        ];
    }
}
