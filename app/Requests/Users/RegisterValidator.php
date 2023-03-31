<?php

namespace App\Requests\Users;


use App\Requests\BaseRequestForm;

class RegisterValidator extends BaseRequestForm
{

    public function rules():array
    {
        return [
            'name'=>'required|min:3|max:60',
            'email'=>'required|email|min:5|max:60|unique:users,email',
            'password' => 'required|min:6|max:99|confirmed',
        ];
    }

    public function authorized(): bool
    {
       return true;
    }
}
