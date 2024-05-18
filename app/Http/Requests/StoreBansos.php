<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBansos extends FormRequest
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
            'no_kk' => 'required|exists:tb_kk,no_kk',
            'gaji' => 'required',
            'jumlah_tanggungan' => 'required',
            'luas_tanah' => 'required',
            'kapasitas_listrik' => 'required',
            'jumlah_kendaraan' => 'required',
            'images' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'no_kk.required' => 'No KK tidak boleh kosong',
            'no_kk.exists' => 'No KK tidak ditemukan',
            'gaji.required' => 'Gaji tidak boleh kosong',
            'jumlah_tanggungan.required' => 'Jumlah tanggungan tidak boleh kosong',
            'luas_tanah.required' => 'Luas tanah tidak boleh kosong',
            'kapasitas_listrik.required' => 'Kapasitas listrik tidak boleh kosong',
            'jumlah_kendaraan.required' => 'Jumlah kendaraan tidak boleh kosong',
            'images.required' => 'Foto rumah tidak boleh kosong',
        ];
    }
}
