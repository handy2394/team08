<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePartiesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tname' => 'required|string|min:2|max:191',
            'chairman' => 'required|string|min:2|max:999',
            'secretary' => 'required|string|min:2|max:999',
            'standpoint' => 'required|string|min:2|max:191',
            'link' => 'required|string|min:2|max:191', 
            //
        ];
    }
    public function messages()
    {
        return [
            "tname.required" => "黨名 為必填",
            "tname.min" => "黨名 至少需2個字元",

            "chairman.required" => "黨主席 為必填",
            "chairman.min" => "黨主席 至少2個字",
            
            "secretary.required" => "秘書長 為必填",
            "secretary.min" => "秘書長 至少2個字",

            "standpoint.required" => "政治立場 為必填",
            "standpoint.min" => "政治立場 至少需2個字",

            "link.required" => "官方網站 為必填",
        ];
    }
}