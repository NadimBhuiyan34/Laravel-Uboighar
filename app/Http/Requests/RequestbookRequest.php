<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestbookRequest extends FormRequest
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
             'booktitle'=>'bail|required|max:255',
             'bookauthor'=>'required|',
            'bookedition'=>'required|',
             'bookquantity'=>'required|',
             'mobile'=>'required|',
             'address'=>'required|',
        ];
    }
}
