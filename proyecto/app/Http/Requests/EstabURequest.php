<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Routing\Route;
use Illuminate\validation\Rule;

class EstabURequest extends FormRequest
{
    protected $route;

    public function _construct(Route $route)
    {
        $this->route=$route;        
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'MaiSuc'=>['required',Rule::unique('testabsucu')->ignore($this->soi,'IdSuc')],            
            'IdCiuEst'=>'required|min:1|numeric',
            'IdTipSuc'=>'required|min:1|numeric',
            'NomEst'=>'required|string|min:3|max:120',          
        ];
    }
}
