<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBerita extends FormRequest
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
            'judul' => 'required',
            'slug' => 'required|unique:tb_berita',
            'gambar' => 'required|image|max:2048',
            'isi' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'judul.required' => 'Judul berita harus diisi',
            'slug.required' => 'Slug berita harus diisi',
            'slug.unique' => 'Slug berita sudah ada',
            'gambar.required' => 'Gambar berita harus diisi',
            'gambar.image' => 'Gambar berita harus berupa gambar',
            'isi.required' => 'Isi berita harus diisi',
            'gambar.max' => 'Gambar berita maksimal 2MB'
        ];
    }
}
