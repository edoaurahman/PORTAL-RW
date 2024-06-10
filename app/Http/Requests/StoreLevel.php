<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLevel extends FormRequest
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
            "nik"=> "required|numeric",
            "level"=> "required|numeric|unique:tb_akun,id_level,2,id_level",
        ];
    }

    // message
    public function messages(): array
    {
        return [
            "nik.required" => "NIK tidak boleh kosong",
            "nik.numeric" => "NIK harus berupa angka",
            "level.required" => "Level tidak boleh kosong",
            "level.numeric" => "Level harus berupa angka",
            "level.unique" => "Level RW sudah ada",
        ];
    }
}
