<?php

namespace App\Http\Requests\Menus;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class AppMenusRequest extends FormRequest
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
            'color'         => 'required|max:255',
            'icon'          => 'required|max:255',
            'title'         => 'required|max:255|unique:app_menus',
            'destination'   => 'max:255',
            //'app_menus_id'  => 'required|max:255',
        ];
    }

//    protected function failedValidation(Validator $validator)
//    {
//        throw new HttpResponseException(response()->json([
//            'data'          => [],
//            'status'        => '422',
//            'statusText'    => 'Error',
//            'headers'       => [],
//            'config'        => [],
//            'request'       => [],
//            //'errors'    => $validator->errors(),
//        ], 422));
//
//    }
}
