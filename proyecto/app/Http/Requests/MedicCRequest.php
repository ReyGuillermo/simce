<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicCRequest extends FormRequest
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
            'TisMed'=>'required|min:2|max:3',
            'NumMed'=>'required|min:3|max:4',
            'DciMed'=>'required|min:7|max:175',
            'ConMed'=>'required|min:3|max:45',
            'ForMed'=>'required|min:3|max:75',
            'ClaMed'=>'required|min:3|max:4',
            'UsoMed'=>'required|min:6|max:75'                       
        ];
    }
}
