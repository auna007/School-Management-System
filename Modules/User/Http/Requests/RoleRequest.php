<?php

namespace Modules\User\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|string|max:255|unique:roles,name',
            'guard_name' => 'required|string|max:255',
            'status'=>'required|string|max:255',
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
            'name.unique' => 'Role name already exist!.',
            'name.required' => 'Role field is required.',
            'status.required' => 'Status field is required.',
            'guard_name.required' => 'Missing guard name'
            
        ];
    }
}
