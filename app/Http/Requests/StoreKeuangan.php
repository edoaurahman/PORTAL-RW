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
            'id_kategori' => 'required|exists:tb_kategori_keuangan,id_kategori',
            'jumlah' => 'required|numeric',
            'nik' => 'required|exists:tb_penduduk,nik'
        ];
    }

    public function messages()
    {
        return [
            'id_kategori.required' => 'Kategori keuangan wajib diisi',
            'id_kategori.exists' => 'Kategori keuangan tidak ditemukan',
            'jumlah.required' => 'Jumlah wajib diisi',
            'jumlah.numeric' => 'Jumlah harus berupa angka',
            'nik.required' => 'NIK wajib diisi',
            'nik.exists' => 'NIK tidak ditemukan'
        ];
    }
}
