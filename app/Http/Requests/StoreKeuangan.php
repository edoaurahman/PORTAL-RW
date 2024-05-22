<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKeuangan extends FormRequest
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
            'jumlah' => 'required|numeric',
            'no_kk' => 'required|exists:tb_kk,no_kk'
        ];
    }

    public function messages()
    {
        return [
            'jumlah.required' => 'Jumlah wajib diisi',
            'jumlah.numeric' => 'Jumlah harus berupa angka',
            'no_kk.required' => 'No KK wajib diisi',
            'no_kk.exists' => 'No KK tidak ditemukan'
        ];
    }
}
