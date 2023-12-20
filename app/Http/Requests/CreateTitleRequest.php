<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateTitleRequest extends FormRequest
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
            'name'=>'required|string|min:1|max:99',
            'gender'=>'required|string|min:1|max:5',
            'session'=>'required|numeric|min:0|max:9999',
            'title'=>'required|string|min:2|max:20',
            'city'=>'required|string|min:0|max:20',
            'birthday'=>'required',
            'area'=>'required|string|min:0|max:20',
            'cellphone'=>'required|numeric',
            'address'=>'required',
            'website'=>'required',
            'tid'=>'required'
        ];
    }
    public function messages()
    {
        return [
            "name.required" => "議員名稱 為必填",
            "name.max" => "議員名稱 必須介於1~99個字元",
            "name.min" => "議員名稱 必須介於1~99個字元",
            "gender.required" => "議員性別 為必填",
            "gender.string"=>"議員性別 必須為中文",
            "gender.max" => "議員性別 必須介於1~20個字元",
            "gender.min" => "議員性別 必須介於1~20個字元",
            "session.required"=>"議員屆數 為必填",
            "session.numeric"=>"議員屆數 必須為數字",
            "title.required" => "議員職務 為必填",
            "title.string"=>"議員職務 必須為中文",
            "title.min"=>"議員職務 必須介於1~20個字元",
            "title.max"=>"議員職務 必須介於1~20個字元",
            "city.required" => "縣市 為必填",
            "city.string"=>"縣市 必須為中文",
            "city.min"=>"必須介於1~20個字元",
            "city.max"=>"必須介於1~20個字元",
            "area.required" => "選區 為必填",
            "area.string"=>"選區 必須為中文",
            "area.min"=>"必須介於1~20個字元",
            "area.max"=>"必須介於1~20個字元",
            "cellphone.required"=>"電話 為必填",
            "cellphone.numeric"=>"電話 必須為數字",
            "address.required" => "地址 為必填",
            "website.required" => "個人網頁 為必填",
            "tid.required" => "政黨 為必填",
        ];
    }    
}
