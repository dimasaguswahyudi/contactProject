<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        if (request()->isMethod('post')) {
            $rules = [
                'name' => 'required',
                'email' => 'required|email|max:255|unique:users,email',
                'password' => 'required|min:8|required_with:conpassword|same:conpassword'
            ];
        }
        elseif (request()->isMethod('PUT')){
            $rules = [
                'name' => 'required',
                'email' => 'required|email|max:255|unique:users,email,'.$this->user->id,
                'password' => 'nullable|min:8|required_with:conpassword|same:conpassword'
            ];
        }
        return $rules;
    }
}
