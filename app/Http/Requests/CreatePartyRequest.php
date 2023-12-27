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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'tname' => 'required|string',
            'chairman' => 'required|string',
            'secretary' => 'required|string',
            'standpoint' => 'required',
            'link' => 'required|string'

        ];
    }
    public function messages()
    {
        return [
        "tname.required" => "政黨名稱 為必填",
        "chairman.required" => "黨主席名稱 為必填",
        "secretary.required" => "秘書長名稱 為必填",
        "standpoint.required" => "政治立場 為必填",
        "link.required" => "官方網站 為必填"
        ];
    }
}