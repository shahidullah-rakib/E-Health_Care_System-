<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRoomRequest extends FormRequest
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
            'roomNo' => 'required|numeric',
            'patientName'=>'required|min:3|max:20|regex:/^[A-Za-z][A-Za-z ]*$/',
            'price'=>'required|numeric',
            'phone'=>'required|numeric|min:11|max:19',
            'type'=>'required|regex:/^[A-Za-z][A-Za-z ]*$/',
        ];
    }

    public function message(){
        return[
            'patientName.regex' => "* username contain alphabet and white spece",
            'type.regex'=>"* type contain alphabet and white spece"
        ];
    }
}
