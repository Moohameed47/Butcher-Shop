<?php

namespace App\Requests\Users;


use App\Requests\BaseRequestForm;

class LoginValidator extends BaseRequestForm
{

    public function rules():array
    {
        return [
            'email'=>'required|email|min:5|max:60',
            'password' => 'required|min:6|max:99',
        ];
    }

    public function authorized(): bool
    {
       return true;
    }
}
