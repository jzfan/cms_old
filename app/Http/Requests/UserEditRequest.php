<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\User;

class UserEditRequest extends Request
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
        $id = ($this->route('user')->id);
        return [
            'name'=>'required|min:2|unique:users,name,'.$id,
            'email'=>'required|email|unique:users,email,'.$id,
            'password' => 'min:6',
        ];
    }
}
