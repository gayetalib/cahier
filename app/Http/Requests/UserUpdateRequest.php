<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $id = $this->user;
        return [
            'nom' => 'required|string|max:255' . $id,
            'prenom' => 'required|string|max:255' . $id,
            'numTel' => 'required|string|max:255|unique:users' . $id,
            'password' => 'required|string|min:8|confirmed' . $id,
        ];
    }
}
