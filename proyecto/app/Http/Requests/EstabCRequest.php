<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EstabCRequest extends FormRequest
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
            'MaiSuc'=>'required|min:1|numeric|unique:testabsucu',
            'IdCiuEst'=>'required|min:1|numeric',
            'IdTipSuc'=>'required|min:1|numeric',
            'NomEst'=>'required|string|min:3|max:120',                             
        ];
    }
}
