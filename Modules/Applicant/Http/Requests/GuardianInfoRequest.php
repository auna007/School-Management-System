<?php

namespace Modules\Applicant\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardianInfoRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        
       return [
            'guardian_name'=>'required|string|max:255',
            'relationship' => 'required|string|max:255',
            'g_address'=>'required|string|max:255',
            'g_phone_no' => 'required|string|max:255'
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
            'guardian_name'=>'Guardian name is required',
            'relationship' => 'Please fill the relationship field between the applicant and the guardian',
            'g_address'=>'Guardian address is required',
            'g_phone_no' => 'Guardian phone no. is required'
        ];
    }
}
