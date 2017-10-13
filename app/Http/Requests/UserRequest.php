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
     * @return array
     */
    public function rules()
    {
		$id = $this->route()->parameter('id');
		if($id)
		{
		return [
            'user.name' => 'required|string|max:255',
            'user.email' => 'required|string|email|max:255|unique:users,email,'.$id.',id',
			'user.photo' => 'nullable|mimes:jpeg,bmp,png',
            'user.password' => 'nullable|string|between:6,20|confirmed',
        ];

			
		}
		
		else
		{
			
			return [
            'user.name' => 'required|string|max:255',
            'user.email' => 'required|string|email|max:255|unique:users,email',
			'user.photo' => 'mimes:jpeg,bmp,png',
            'user.password' => 'required|string|between:6,20|confirmed',
        ];

			
		}
		
		
    }
}
