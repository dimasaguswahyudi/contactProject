<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
                'email' => 'required|email|max:255|unique:contacts,email',
                'no_telp' => 'required|min:10|max:15'
            ];
        }
        elseif (request()->isMethod('PUT')){
            $rules = [
                'name' => 'required',
                'email' => 'required|email|max:255|unique:contacts,email,'.$this->contact->id,
                'no_telp' => 'required|min:10|max:15'
            ];
        }
        return $rules;
    }
}
