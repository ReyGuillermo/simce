<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumsCRequest extends FormRequest
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
            //'user_id' => 'required|unique_with:service_details,service_id', 
            //'IdTipDso'=>'required|min:1|unique_with:ddsolicitados,IdTsoDso',
            //'IdTipDso'=>'required|min:1|unique:ddsolicitados',
            //'IdTsoDso'=>'required|min:1|unique:ddsolicitados',
            'EstDso'=>'required|min:1'                    
        ];
    }
}
