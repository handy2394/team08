<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePartyRequest extends FormRequest
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
    public function rules()
    {
        return [
            'tname' => 'required|string',
            'chairman' => 'required|string',
            'secretary' => 'required|string',
            'standpoint' => 'required|string',
            'link' => 'required|string'


        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            "tname.required" => "政黨名稱 為必填",
           // "tname.min" => "政黨名稱 至少需2個字元",
            "chairman.required" => "黨主席 為必填",
           // "chairman.min" => "黨主席 至少需2個字元",
            "secretary.required" => "秘書長 為必填",
           // "secretary.min" => "秘書長 至少需2個字元",
            "standpoint.required" => "政治立場 為必填",
           // "standpoint.min" => "政治立場 至少需2個字元",
            "link.required" => "官方網站 為必填",
        ];
    }
    
}
