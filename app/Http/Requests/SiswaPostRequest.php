<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaPostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nisn' => 'required',
            'nama_siswa' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'email' => 'required|unique:users,email',
            'no_hp' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'alamat' => 'required',
            'orangtua_nama' => 'required',
            'orangtua_email' => 'required',
            'orangtua_tempatlahir' => 'required',
            'orangtua_tanggallahir' => 'required',
            'orangtua_email' => 'required',
            'orangtua_hp' => 'required',
            'orangtua_provinsi' => 'required',
            'orangtua_kota' => 'required',
            'orangtua_kecamtan' => 'required',
            'orangtua_kelurahan' => 'required',
            'orangtua_alamat' => 'required',
        ];
    }
}
