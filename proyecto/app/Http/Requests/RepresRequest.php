<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RepresRequest extends FormRequest
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
            'PnoPer'=>'required|string|min:3|max:25', 
            'PapPer'=>'required|string|min:3|max:25',
            'NuiPer'=>'required|numeric',
                                 
        ];
    }
}
