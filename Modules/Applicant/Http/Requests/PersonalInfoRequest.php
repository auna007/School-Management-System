<?php

namespace Modules\Applicant\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonalInfoRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
         return [
            'f_name'=>'required|string|max:255',
            'surname' => 'required|string|max:255',
            'email'=>'required|string|max:255',
            'gender' => 'required|string|max:255',
            'phone_no' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'lga' => 'required|string|max:255'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
         return [
            'f_name'=>'Applicant first name is required',
            'surname' => 'Applicant surname is required',
            'email'=>'Applicant email is required',
            'gender' => 'Applicant gender is required',
            'phone_no' => 'Applicant phone no. is required',
            'address' => 'Applicant address is required',
            'state' => 'Applicant state of origin is required',
            'lga' => 'Applicant LGA of origin is required'
        ];
    }

}
