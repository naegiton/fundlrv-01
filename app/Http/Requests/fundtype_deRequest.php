<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class F_fundtype_lRequest extends Request
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

            'fundname' => 'required',
            'fundname2l' => 'required',
            
        ];
    }

    public function messages()
{
    return [
        'fundname.required' => 'กรุณาป้อนชื่อ ฌาปณกิจ',
        'fundname2l.required'  => 'กรุณาป้อน ชื่อย่อ',
    ];
}
}
