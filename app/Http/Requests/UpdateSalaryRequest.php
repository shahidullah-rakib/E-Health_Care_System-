<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSalaryRequest extends FormRequest
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
        return [
            'username' => 'required|min:3|max:20|regex:/^[A-Za-z][A-Za-z ]*$/',
            'email'    => 'required|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'updateSalary'=>'required|numeric',
            'currentSalary'=>'required|numeric',
        ];
    }

    public function messages(){
        return[
            'username.regex' => "* username contain alphabet and white spece",
            'email.regex'    => '* Invalid email',
        ];
    }
}
