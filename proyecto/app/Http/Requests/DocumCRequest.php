<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumCRequest extends FormRequest
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
            'NomTip'=>'required|min:3|max:125|unique:dtdocumento'                       
        ];
    }
}
