<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePenduduk extends FormRequest
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
            "nik" => "required|unique:tb_penduduk,nik|max:16",
            "no_kk" => "required|max:16",
            "nama" => "required",
            "tempat_lahir" => "required",
            "tgl_lahir" => "required",
            "jenis_kelamin" => "required",
            "agama" => "required",
            "status_perkawinan" => "required",
            "pekerjaan" => "required",
            "gol_darah" => "required",
            "kel" => "required",
            "kecamatan" => "required",
            "rw" => "required",
            "jalan" => "required",
            "rt" => "required",
            "no_hp" => "required",
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            "nik.required" => "Kolom NIK wajib diisi.",
            "nik.max" => "NIK maksimal 16 karakter.",
            "nik.unique" => "NIK sudah terdaftar.",
            "no_kk.required" => "Kolom No. KK wajib diisi.",
            "no_kk.max" => "No. KK maksimal 16 karakter.",
            "nama.required" => "Kolom Nama wajib diisi.",
            "tempat_lahir.required" => "Kolom Tempat Lahir wajib diisi.",
            "tgl_lahir.required" => "Kolom Tanggal Lahir wajib diisi.",
            "jenis_kelamin.required" => "Kolom Jenis Kelamin wajib diisi.",
            "agama.required" => "Kolom Agama wajib diisi.",
            "status_perkawinan.required" => "Kolom Status Perkawinan wajib diisi.",
            "pekerjaan.required" => "Kolom Pekerjaan wajib diisi.",
            "gol_darah.required" => "Kolom Golongan Darah wajib diisi.",
            "kel.required" => "Kolom Kelurahan wajib diisi.",
            "kecamatan.required" => "Kolom Kecamatan wajib diisi.",
            "rw.required" => "Kolom RW wajib diisi.",
            "jalan.required" => "Kolom Jalan wajib diisi.",
            "rt.required" => "Kolom RT wajib diisi.",
            "no_hp.required" => "Kolom No. HP wajib diisi.",
        ];
    }
}