<?php

namespace Modules\Applicant\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HealthInfoRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'blood_group'=>'required|string|max:255'            
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
            'blood_group'=>'Applicant blood group is required'          
        ];
    }
}
